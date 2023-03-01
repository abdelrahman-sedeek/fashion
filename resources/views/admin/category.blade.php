@include('admin.inc.head')
@include('admin.inc.slideBar')
@include('admin.inc.header')
<style>
.categoty_form
{
    text-align: center;
    width: 50%;
    background-color: FAF7F0;
}
</style>
@if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{session()->get('message')}}
      </div>
@endif
<form class="categoty_form container align-items-center my-5  " action="{{route('add_category')}}" method="POST">
    @csrf
    <div class="mb-3 ">
      {{-- <label for="exampleInputEmail1" class="form-label font-weight-bold font-medium  ">Add category</label>
      <input type="text" class="form-control my-3 "  name="Category_name" placeholder="enter category" > --}}
      {{-- <label for="exampleInputEmail1" class="form-label font-weight-bold font-medium  ">Select category</label> --}}
      {{-- <select name="" >
        @foreach ($data as $data )
        <option value="{{$data->id}}">{{$data->categoty_type}}</option>
        @endforeach
        </select> <br> --}}
      
      <label for="exampleInputEmail1" class="form-label font-weight-bold font-medium  ">Add category type</label>
      <input type="text" class="form-control my-3 "  name="Category_type" placeholder="enter new category type" >
    </div>
    <button type="submit" class="btn btn-primary m-auto">Submit</button>
  </form>
  <div class="dataTable container" style="text-align: center" >

    {{-- --------------------------------------- SHOW CATEGORY ----------------------------------- --}}
    
    <label class=" form-label font-weight-bold font-3xl my-5  " >  show category</label>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">category type</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            
            <?php $counter=1; ?>
            @foreach ($data as $data )

            <tr>
                <th scope="row">{{$counter++}}</th>
                <td>{{$data->category_type}}</td>
                <td>
                    <a href="" class="btn btn-primary">edit</a>
                    <a onclick="return confirm('are you sure to delete this item')" href="{{route('delete_category',$data->id)}}" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
          
         
        </tbody>
      </table>
  </div>
@include('admin.inc.footer')