<?php

namespace App\Http\Controllers;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\order;
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
    // ***********************end of cart*********************************
     
    public function product_detail($id)
    {
        $detail=product::find($id);
        return view('home.productDetail',compact('detail'));
    }

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
    
    public function cheakout(Request $request)
    {
         $cart = cart::with('product')->where('user_id', Auth::user()->id)->where('watchlist',false)->get();
         $cart_count = cart::with('product')->where('user_id', Auth::user()->id)->where('watchlist',false)->count();
        return view('home.cheakout',compact('cart','cart_count'));
    }
  
}
