<div class="featuredItems justify-content-center container mt-4">
    <div class="header d-flex justify-content-center  my-5">
      <h4>Trending Items</h4>
    </div>
   
    <div class="itemCards ">
      <div class="cards">
        <div class="row" id="list">
          <!-- card 1 -->
          @foreach ($show_trend_product as  $show )
          @php
          $finalPrice=$show->product_price - $show->discount_price;
          
          $dicountPrecent=($show->discount_price /$show->product_price) * 100;
          $dicountPrecent=round($dicountPrecent, 0);
          @endphp

      
        <div class="col-lg-3 col-sm-12 col-md-6 {{$show->category->category_type }}  mb-5 product_card ">
            <div class="card  justify-content-center m-auto border-0  " style="width: 85%;">
             <a href="{{route('product_details',$show->id)}}">
              <div class="image">
                <div class="prod_image">
                  <i class="fa-regular fa-eye"></i>
                  <img src="{{asset('images')}}/{{$show->image}}" class="card-img-top" alt="...">
                </div>
                <div class="price">
                  <span>{{$finalPrice}}$</span>
                </div>
                @if ($show->discount_price !=null)
                  
                <div class="offer">
                  <span>{{$dicountPrecent}}%</span><br>
                  <span>OFF</span>
                </div>
                @endif
              </div>
            </a>
              <div class="card-body">
                <div class="productname">
                  <p>{{$show->product_name}}</p>
                </div>
                <div class="rate">

                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star star "></i>
                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star"></i>

                </div>
                <div class="actions mt-2">
                  <a href="{{route('add_watchlist',$show->id)}}"><i class="fa-regular fa-heart">      </i></a>
                  <a href=""><i class="fa-solid fa-share-nodes">  </i></a>
                  <a href=""><i class="fa-solid fa-cart-shopping"></i></a>

                </div>
              </div>
            </div>
          </div>
            
          @endforeach
          <span class=" m-auto p-2 d-flex justify-content-center">
            {{$show_product->links()}}

          </span>
         
        </div>
      </div>


    </div>
  
     <!-- Start Testimonials Section -->
    
  </div>