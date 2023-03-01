@include('admin.inc.head')
@include('admin.inc.slideBar')
@include('admin.inc.header')
<div class="card-header">
    <strong>edit product</strong> 
</div>
<div class="card-body card-block">
    <form action="{{route('confirm_edit_product',$updateProduct->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        
        @csrf
        
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{session()->get('message')}}
            </div>
        @endif
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row form-group">
            <div class="col col-md-3"><label for="product_name" class=" form-control-label">product name</label></div>
            <div class="col-12 col-md-9">
                <input type="text" id="product_name" name="product_name" placeholder="product name" class="form-control" value="{{$updateProduct->product_name}}">
            </div>
           
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="product_price" class=" form-control-label">product price</label></div>
            <div class="col-12 col-md-9">
                <input type="number" id="product_price" name="product_price"  class="form-control"value="{{$updateProduct->product_price}}" >
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="discount_price" class=" form-control-label">discount price</label></div>
            <div class="col-12 col-md-9">
                <input type="number" id="discount_price" name="discount_price"  class="form-control" value="{{$updateProduct->discount_price}}" >
            </div>
        </div>
        
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="size" class=" form-control-label">size</label></div>
            <div class="col-12 col-md-9">
                <input type="text" id="size" name="size"  class="form-control" value="{{$updateProduct->size}}">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="quantity" class=" form-control-label">quantity</label></div>
            <div class="col-12 col-md-9">
                <input type="number" id="quantity" name="quantity"  class="form-control" value="{{$updateProduct->quantity}}">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">sections</label></div>
            <div class="col col-md-9">
                <div class="form-check">
                    <div class="checkbox">
                        <label for="checkbox1" class="form-check-label ">
                            <input type="checkbox" id="Stock_box" name="stock" value="1" {{ ($updateProduct->stock==1) ? 'checked="checked"' : '' }} class="form-check-input">Stock
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="checkbox2" class="form-check-label ">
                            <input type="checkbox" id="Featured" name="featured" value="1" {{ ($updateProduct->Featured==1) ? 'checked="checked"' : '' }}  class="form-check-input"> Featured
                        </label>
                    </div>
                   
                </div>
            </div>
        </div>
        
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">category</label></div>
            <div class="col-12 col-md-9">
                <select name="category_id" id="selectSm" class="form-control-sm form-control">
                    <option  disabled  hidden>----- choose type -----</option>
                    
                    <option value="{{$updateProduct->category->id}}" selected="" hidden >
                        {{$updateProduct->category->category_type}}
                    </option>
                    @foreach ($Allcategory as $Allcategory )
                    <option value=" {{$Allcategory->id}}" >
                        {{$Allcategory->category_type}}
                    </option>
                    @endforeach
                    
                </select>
            </div>
        </div>
       
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="discription" class=" form-control-label">discription</label></div>
            <div class="col-12 col-md-9">
                <textarea type="text" id="discription" name="discription" placeholder="Enter discription"  class="form-control" >{{$updateProduct->discription}}
                </textarea>
            </div>
        </div>
        <div class="row form-group my-5 ">
            <div class="col col-md-3  "><label for="image" class=" form-control-label align-middle">currant image</label></div>
            <img style="max-height:300px" src="/images/{{$updateProduct->image}}" alt="">
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="image" class=" form-control-label"> change image</label></div>
            <div class="col-12 col-md-9"><input type="file" id="image" name="image" class="form-control-file" ></div>
        </div>
        <button class=" btn btn-primary" type="submit">update product</button>

    </form>
</div>
@include('admin.inc.footer')
