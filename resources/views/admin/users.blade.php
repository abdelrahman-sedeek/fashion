@include('admin.inc.head')
@include('admin.inc.slideBar')
@include('admin.inc.header')

<div class="orders">

    <div class="container ">
        @if (!$data->count())
        <div class="text text-center m-5">
            <span class="fs-1  "> You Have No users</span>
        </div>
        @else
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session()->get('message')}}
            
          </div>
        @endif
        <div class="header d-flex justify-content-center my-5 " >
            <h3>users</h3>
        </div>
        <button  type="button" class="btn btn-primary"  data-toggle="modal" data-target="#addUserModal"><i class="fas fa-user-plus "></i>  add user</button>
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">add User</h5>
                </div>
                <div class="modal-body">
                    <form action="{{route('add_user')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" name="name" class="form-control" id="name-text" >
                         
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" name="email" class="form-control" id="email-text" aria-describedby="emailHelp">
                         
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">User type</label>
                            <select name="userType" class="form-control" id="select">
                              <option value="admin">Admin</option>
                              <option value="mod">Moderator</option>
                              <option value="user">User</option>
                               </select>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
          



        <div class="table my-5">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">address</th>
                            <th scope="col">phone</th>
                            <th scope="col">type</th>
                            @can('admin')
                                
                            <th scope="col">action</th>
                            @endcan
                          </tr>
                        </thead>
                        <tbody>
                              @php
                                  $counter=1;
                              @endphp
                          @foreach ($data as $users )
                          <tr>
                              <th scope="row">{{$counter++}}</th>
                              <td>{{$users->name}}</td>
                              <td>{{$users->email}}</td>
                              <td>{{$users->address}}</td>
                              <td>{{$users->phone}}</td>
                              <td>{{$users->goodType()}}</td>
                            @can('admin')
                                
                            <td> 
                              <button  type="button" class="btn btn-primary" onclick="editUser({{$users->id}},'{{$users->name}}','{{$users->userType}}')"   data-toggle="modal" data-target="#editUserModal"> <i class="fas fa-marker "></i>  </button>
                              <button  type="button"  class="btn btn-danger" onclick="deleteUser({{$users->id}})" data-toggle="modal" data-target="#deleteUserModal"><i class="fas fa-trash"></i>   </button>
                                
                            </td>
                            @endcan
                              
                            </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                </div>
            @endif
        
    </div>
</div> 
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        </div>
        <div class="modal-body">
            <form action="{{route('edit_user')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" id="user_id" value="">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" id="name" >
                </div>
                
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">User type</label>
                    <select name="userType" class="form-control" id="userType">
                      <option value="admin">Admin</option>
                      <option value="mod">Moderator</option>
                      <option value="user">User</option>
                       </select>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"  id="exampleModalLabel">Delete User</h5>
        </div>
        <div class="modal-body">
            <form action="{{route('delete_user')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" id="delete_id" value="">
                <h4 class=" my-2">Are you Sure ?</h4>
              </div>
              <div class="modal-footer">
                <button type="submit"  class="btn btn-danger">Yes</button>
            </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
  <script>
    function editUser(id,userName,type){ 
     document.getElementById('user_id').value= id;
     document.getElementById('name').value= userName;
     document.getElementById('userType').value= type;
     console.log('hi')
    }
    function deleteUser(id)
    {
      document.getElementById('delete_id').value= id;

    }
    
  </script>
@include('admin.inc.footer')