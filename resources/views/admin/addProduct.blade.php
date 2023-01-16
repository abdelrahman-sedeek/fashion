@include('admin.inc.head')
@include('admin.inc.slideBar')
@include('admin.inc.header')
<div class="card-header">
    <strong>add product</strong> 
</div>
<div class="card-body card-block">
    <form action="{{route('add_product')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        
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
            <div class="col-12 col-md-9"><input type="text" id="product_name" name="product_name" placeholder="product name" class="form-control"></div>
           
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="product_price" class=" form-control-label">product price</label></div>
            <div class="col-12 col-md-9"><input type="number" id="product_price" name="product_price"  class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="discount_price" class=" form-control-label">discount price</label></div>
            <div class="col-12 col-md-9"><input type="number" id="discount_price" name="discount_price"  class="form-control"></div>
        </div>
        
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="size" class=" form-control-label">size</label></div>
            <div class="col-12 col-md-9"><input type="text" id="size" name="size"  class="form-control"></div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="quantity" class=" form-control-label">quantity</label></div>
            <div class="col-12 col-md-9"><input type="number" id="quantity" name="quantity"  class="form-control"><small class="help-block form-text">Please enter a the quantitiy</small></div>
        </div>
        
        
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">category</label></div>
            <div class="col-12 col-md-9">
                <select name="category_id" id="selectSm" class="form-control-sm form-control">
                    <option  disabled selected hidden>----- choose type -----</option>
                    @foreach ($category as $category_type )
                    
                    <option value="{{$category_type->id}}">
                        {{$category_type->category_type}}
                    </option>
                    @endforeach
                    
                </select>
            </div>
        </div>
        {{-- <div class="row form-group">
            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">category name </label></div>
            <div class="col-12 col-md-9">
                <select name="selectSm"  class="form-control-sm form-control">
                    <option  disabled selected hidden>----- choose name -----</option>
                    @foreach ($category as $category_name )
                    
                    <option value="{{$category_name->category_name}}">
                        {{$category_name->category_name}}
                    </option>
                    
                    @endforeach
                     
                </select>
            </div>
        </div> --}}
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="discription" class=" form-control-label">discription</label></div>
            <div class="col-12 col-md-9"><textarea type="text" id="discription" name="discription" placeholder="Enter discription" class="form-control"></textarea></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="image" class=" form-control-label">image</label></div>
            <div class="col-12 col-md-9"><input type="file" id="image" name="image" class="form-control-file"></div>
        </div>
        <button class=" btn btn-primary" type="submit">add product</button>

        {{-- <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Radios</label></div>
            <div class="col col-md-9">
                <div class="form-check">
                    <div class="radio">
                        <label for="radio1" class="form-check-label ">
                            <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radio2" class="form-check-label ">
                            <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radio3" class="form-check-label ">
                            <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                        </label>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Inline Radios</label></div>
            <div class="col col-md-9">
                <div class="form-check-inline form-check">
                    <label for="inline-radio1" class="form-check-label ">
                        <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                    </label>
                    <label for="inline-radio2" class="form-check-label ">
                        <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                    </label>
                    <label for="inline-radio3" class="form-check-label ">
                        <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                    </label>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Checkboxes</label></div>
            <div class="col col-md-9">
                <div class="form-check">
                    <div class="checkbox">
                        <label for="checkbox1" class="form-check-label ">
                            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="checkbox2" class="form-check-label ">
                            <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="checkbox3" class="form-check-label ">
                            <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                        </label>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Inline Checkboxes</label></div>
            <div class="col col-md-9">
                <div class="form-check-inline form-check">
                    <label for="inline-checkbox1" class="form-check-label ">
                        <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                    </label>
                    <label for="inline-checkbox2" class="form-check-label ">
                        <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                    </label>
                    <label for="inline-checkbox3" class="form-check-label ">
                        <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                    </label>
                </div>
            </div>
        </div> --}}
        
        {{-- <div class="row form-group">
            <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
            <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
        </div> --}}
    </form>
</div>
@include('admin.inc.footer')