@include('home.inc.header')
@include('home.inc.navbar')


<div class="featuredItems justify-content-center container mt-4">
    <div class="header d-flex justify-content-center mb-5 " >
      <h5>watchlist items</h5>
    </div>
        @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{session()->get('message')}}
        </div>
        @endif
        @if ($watchlist_count==0)
            <div class=" alert_message d-flex justify-content-center " style="font-family: cursive;
            font-size: x-large">
                <span class="">there is now watchlist items !</span> 
            </div>
        @endif
        


  
    <!-- start of cards -->
    <div class="itemCards mb-5 ">
      <div class="cards ">
        <div class="row" id="list">
          <!-- card 1 -->
          @foreach ($watchlist as  $show )
          @php
          $finalPrice=$show->product->product_price - $show->discount_price;
          
        //   $dicountPrecent=($show->discount_price /$show->product_price) * 100;
        //   $dicountPrecent=round($dicountPrecent, 0);
          @endphp

      
        <div class="col-lg-3 col-sm-12 col-md-6  justify-content-center product_card ">
            <div class="card  justify-content-center m-auto border-0  " style="width: 85%;">
             <a href="{{url('/product_details',$show->product->id)}}">
              <div class="image">
                <div class="prod_image">
                  <i class="fa-regular fa-eye"></i>
                  <img src="{{asset('images')}}/{{$show->product->image}}" class="card-img-top" alt="...">
                </div>
                <div class="price">
                  <span>{{$finalPrice}}$</span>
                </div>
                @if ($show->product->discount_price !=null)
                  
                {{-- <div class="offer">
                  <span>{{$dicountPrecent}}%</span><br>
                  <span>OFF</span>
                </div> --}}
                @endif
              </div>
            </a>
              <div class="card-body">
                <div class="productname">
                  <p>{{$show->product->product_name}}</p>
                </div>
                <div class="rate">

                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star star "></i>
                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star"></i>

                </div>
                <div class="actions mt-2">
                  <form action="{{route('delete_watchlist',$show->id)}}" method="POST" >
                    @csrf
                    <a href=""><i class="fa-solid fa-share-nodes">  </i></a>
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                    <a onclick="this.closest('form').submit(); return false;"><i class="fa-regular fa-heart"></i></a>
                  </form>
                  

                </div>
              </div>
            </div>
          </div>
            
          @endforeach
          <span class=" m-auto p-2 d-flex justify-content-center">
            {{-- {{$show_product->links()}} --}}

          </span>
          
        </div>
      </div>


    </div>
  </div>


@include('home.inc.footer')