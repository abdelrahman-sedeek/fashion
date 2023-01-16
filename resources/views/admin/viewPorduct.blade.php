@include('admin.inc.head')
@include('admin.inc.slideBar')
@include('admin.inc.header')
<div class="card-header">
    <strong>view product</strong> 
</div>
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{session()->get('message')}}
    </div>
    @endif
    <div class="dataTable mt-5 container-fluid" style="text-align: center; " >    
        <table class="table table-striped container-fluid ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">product name</th>
              <th scope="col">category</th>
              <th scope="col">discription </th>
              <th scope="col">price</th>
              <th scope="col">discount price</th>
              <th scope="col">size</th>
              <th scope="col">quantity</th> 
              <th scope="col">total price</th>
              <th scope="col">image</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
              
              <?php
               $counter=1; 
              ?>
              @foreach ($show as $show )
              
              <tr >
                  <th scope="row">{{$counter++}}</th>
                  <td>{{$show->product_name}}</td>
                  <td>{{$show->category->category_type}}</td>
                  <td>{{$show->discription}}</td>
                  <td>{{$show->product_price}}</td>
                  <td>{{$show->discount_price}}</td>
                  <td>{{$show->size}}</td>
                  <td>{{$show->quantity}}</td>
                  <td>{{$show->product_price - $show->discount_price}}</td>
                  <td>
                    <img src="/images/{{$show->image}}" alt="">
                  </td>
                  <td class="d-flex justify-con">
                      <a href="{{route('update_product',$show->id)}}" class="btn btn-primary mx-3 "style="display: inline"  >edit</a>
                      <a  style="display: inline"  onclick="return confirm('are you sure to delete this item')" href="{{route('delete_product',$show->id)}}" class="btn btn-danger mx-2">delete</a>
                  </td>
                  <td>
                      
                  </td>
              </tr>
              @endforeach
            
           
          </tbody>
        </table>
    </div>

@include('admin.inc.footer')