<?php

namespace App\Http\Controllers;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\order;
use App\Models\OrderItems;
use App\Models\product;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show_product=product::paginate(8);
        
        return view('home.store',compact('show_product'));
        
    }
    public function redicert()
    {
        if(Auth::user()->userType=='admin')
        {
            return redirect()->route('dashboard');
        }
        else
        return redirect()->route('home');
    }
    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->Category_name;
        $data->save();
        return redirect()->back();
        
    }
    public function product_detail($id)
    {
        $product=product::find($id);
        return view('home.productDetail',compact('product'));
    }
    // **********************cart*********************
    public function add_cart(product $product,Request $request)
    {
        
        
        $total_price = $product->discount_price != null ?($product->product_price -$product->discount_price) * $request->OrderQuantity :
        $product->product_price  * $request->OrderQuantity ;
        
        cart::create([
            'product_id'=>$product->id,
            'user_id'=>Auth::user()->id,
            'quantity'=>$request->OrderQuantity,
            'total_price'=>$total_price,
            
            
        ]);
        
        return redirect()->back()->with('message','product added to cart sucessfully');
        
        
    }
    public function show_cart(Request $request)
    {
        
        $cart = cart::with('product')->where('user_id', Auth::user()->id)->where('watchlist',false)->get();
        $cart_count = cart::with('product')->where('user_id', Auth::user()->id)->where('watchlist',false)->count();
        
        return view('home.cart',compact('cart','cart_count'));

    }    
    //delete cart and watchlist
    public function delete_cart(cart $cart)
    {
        if($cart->user_id != Auth::user()->id)
        {
            abort(403, 'Unauthorized action.');
            
        }
        $cart->delete();
        return redirect()->back()->with('message', 'item deleted sucessfully');
    }
    public function cheakout(Request $request)
    {
        $subtotal = Auth::user()->cart()->where('watchlist',false)->sum('total_price');
        $cart_count = Auth::user()->cart()->where('watchlist',false)->sum('quantity');
        
        
       
        return view('home.cheakout',compact('subtotal','cart_count'));
    }
    // ***********************end of cart*********************************
     

    // ============================watchlist-------------------------------------
    public function add_watchlist(product $product)
    {

       
        cart::updateOrCreate([
            'product_id'=>$product->id,
            'user_id'=>Auth::user()->id,
            'watchlist'=>true,

        ]);
        return redirect()->back();
    }

    public function show_watchlist(Request $request)
    {
        
        $watchlist = cart::with('product')->where('user_id', Auth::user()->id)->where('watchlist',true)->get();
        $watchlist_count = cart::with('product')->where('user_id', Auth::user()->id)->where('watchlist', true)->count();
        
        
        return view('home.watchlist',compact('watchlist','watchlist_count'));
        
    }    
    // ----------------------------------- end of watchlist--------------------------------------->


    // ==================================== start of order =======================================>
    
    public function add_order(Request $request)
    {
        
        
        $validated = $request->validate([
            'name' =>'required |max:100' ,
            'phone' => 'required |numeric',
            'address' => 'required',
            'email' => '',
            'city' => 'required',
            'country' => 'required ',
            
        ]);

        $order_items=[];
        
        $cart=cart::where('user_id',auth()->user()->id)->where('watchlist',false)->with('product')->get(); 
        if(!$cart->count())
        {
            return redirect()->back()->with('message', 'cart is empty');
        }
        foreach($cart as $item)
        {
            if($item->quantity>$item->product->quantity)
            {
                return redirect()->back()->with('message', 'quantity not enough');
    
            }

        }
        $order =order::Create([
            'discount'=>0,
            'state'=>'processing',
            'zip'=>'12345',
            'tax'=>$cart->sum('total_price')*1/100,
            'subtotal'=>$cart->sum('total_price'),
            'total_price'=>$cart->sum('total_price')*1/100 +$cart->sum('total_price'),
            'user_id'=>Auth::user()->id,
            'city'=>$request->city,
            'country'=>$request->country,
             
        ]);
        foreach ($cart as $item) {
            $order_items[]=[
                'order_id'=>$order->id,
                'product_id'=>$item->product_id,
                'quantity'=>$item->quantity,
                'total_price'=>$item->total_price,
                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ];
            $product=$item->product;
            $product->quantity=$item->product->quantity - $item->quantity;
            $product->save();            
        }
        OrderItems::insert($order_items);
        cart::where('user_id',auth()->user()->id)->where('watchlist',false)->delete();      
        return redirect()->back()->with('message','product added to cart sucessfully');
        
        
    }
  
}
