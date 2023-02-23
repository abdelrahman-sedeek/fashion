@include('home.inc.header')
@include('home.inc.navbar')
<div class="orders">

    <div class="container ">
        @if (!$order->count())
        <div class="text text-center m-5">
            <span class="fs-1  "> You Have No Orders</span>
        </div>
        @else
        <div class="header d-flex justify-content-center my-5 " >
            <h5>Orders</h5>
        </div>
        <div class="table mb-5">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">total</th>
                            {{-- <th scope="col">discount</th> --}}
                            <th scope="col">address</th>
                            <th scope="col">phone</th>
                            <th scope="col">order date</th>
                            <th scope="col">status</th>
                            <th scope="col">action</th>
                          </tr>
                        </thead>
                        <tbody>
                              @php
                                  $counter=1;
                              @endphp
                          @foreach ($order as $orders )
                          <tr>
                              <th scope="row">{{$counter++}}</th>
                              <td>{{$orders->user->name}}</td>
                              <td>{{$orders->total_price}}</td>
                              <td>{{$orders->user->address}}</td>
                              <td>{{$orders->user->phone}}</td>
                              <td>{{$orders->created_at}}</td>
                              <td>{{$orders->state}}</td>
                              <td><a href=""><i class=" btn btn-primary fas fa-eye"></i></a></td>
                              
                            </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                </div>
            @endif
        
    </div>
</div>    
@include('home.inc.footer')