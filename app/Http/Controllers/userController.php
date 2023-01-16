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
    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->Category_name;
        $data->save();
        return redirect()->back();
        
    }
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
    public function redicert()
    {
        if(Auth::user()->userType=='admin')
        {
            return redirect()->route('dashboard');
        }
        else
        return redirect()->route('home');
    }
    
    
     
    public function product_detail($id)
    {
        $detail=product::find($id);
        return view('home.productDetail',compact('detail'));
    }

    
    public function add_watchlist(product $product)
    {

       
        cart::updateOrCreate([
            'product_id'=>$product->id,
            'user_id'=>Auth::user()->id,
            'watchlist'=>true,

            
        ]);
        return view('home.watchlist');
    }

    public function show_watchlist(Request $request)
    {
        
        $watchlist = cart::with('product')->where('user_id', Auth::user()->id)->where('watchlist',true)->get();
        $watchlist_count = cart::with('product')->where('user_id', Auth::user()->id)->where('watchlist', true)->count();
        

        return view('home.watchlist',compact('watchlist','watchlist_count'));

    }    
    
    public function delete_cart(cart $cart)
    {
        if($cart->user_id != Auth::user()->id)
        {
            abort(403, 'Unauthorized action.');

        }
        $cart->delete();
        return redirect()->back()->with('message', 'product deleted from cart sucessfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
