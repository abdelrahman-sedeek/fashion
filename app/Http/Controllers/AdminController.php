<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function view_category()
    {
        $data=category::all();

        return view('admin.category',compact('data'));
        
    }
    public function dashboard()
    {

        return view('admin.home');
        
    }
    
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','category deleted sucessfully');

    }
    public function add_category(Request $request)
    {
        $data=new category;
        // $data->category_name=$request->Category_name;
        $data->category_type=$request->Category_type;
        $data->save();
        return redirect()->back()->with('message','category added sucessfully');
        
    }
    public function add_product(Request $request)
    {
        $validated = $request->validate([
            'product_name' =>'required |max:100' ,
            'discription' => 'required |max:500',
            'quantity' => 'required|min:1',
            'category_id' => 'required',
            'discount_price' => '',
            'product_price' => 'required',
            'size' => 'required ',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:4000',
            
            
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        
        //  product::create($validated);
         $product=new product($validated);
         $product->image = $imageName;
         $product->save();
        return redirect()->back()->with('message','product added sucessfully');

    }
    public function view_product()
    {
        $category=category::all();
        return view('admin.addProduct',compact('category'));
        
    }
    public function show_product()
    { 
        $show=product::all();
        
        return view('admin.viewPorduct',compact('show'));
        
    }
    public function delete_product($id)
    { 
        $deleteProduct=product::find($id);
        $deleteProduct->delete();
        return redirect()->back()->with('message','product deleted sucessfully');

        
    }
    public function update_product($id)
    { 
        $updateProduct=product::find($id);
        $Allcategory=category::all();
        
        return view('admin.editPorduct',compact('updateProduct','Allcategory'));
        
        
    }
    public function confirm_edit_product($id,request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
        ]);
        $product=product::find($id);
        $image=$request->image;
        if($image)
        {
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }
        //  product::create($validated);
        $product->product_name=$request->product_name;
        $product->discription=$request->discription;
        $product->product_name=$request->product_name;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount_price;
        $product->size=$request->size;
        $product->category_id=$request->category_id;
       
        // $product->product_name=$request->product_name;
        //  $product=new product($validated);
         $product->save();
        return redirect()->back()->with('message','product updated sucessfully');
        
    }

}
