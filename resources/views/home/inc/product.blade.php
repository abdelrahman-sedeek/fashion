<div class="featuredItems justify-content-center container mt-4">
    <div class="header d-flex justify-content-center ">
      <h5>featured items</h5>
    </div>
    <!-- item bar -->
    <div class="itemBar  ">
      <ul class="button-group filter-button-group mb-2 d-flex justify-content-center">
        <li class="nav-item"><button class="btn btnBar"   data-filter="*"     > all   </button></li>
        <li class="nav-item"><button class="btn btnBar"   data-filter=".women"> women </button></li>
        <li class="nav-item"><button class="btn btnBar"   data-filter=".men"  > men   </button></li>
        <li class="nav-item"><button class="btn btnBar"   data-filter=".kids" > kids  </button></li>
      </ul>
    </div>
    <!--  end of item bar -->
    <!-- start of cards -->
    <div class="itemCards ">
      <div class="cards">
        <div class="row" id="list">
          <!-- card 1 -->
          @foreach ($show_product as  $show )
          @php
          $finalPrice=$show->product_price - $show->discount_price;
          
          $dicountPrecent=($show->discount_price /$show->product_price) * 100;
          $dicountPrecent=round($dicountPrecent, 0);
          @endphp

      
        <div class="col-lg-3 col-sm-12 col-md-6 {{$show->category->category_type }}  mb-5 product_card ">
            <div class="card  justify-content-center m-auto border-0  " style="width: 85%;">
             <a href="{{url('/product_details',$show->id)}}">
              <div class="image">
                <div class="prod_image">
                  <i class="fa-regular fa-eye"></i>
                  <img src="images/{{$show->image}}" class="card-img-top" alt="...">
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
          <!-- card 2 -->
          {{-- <div class="col-lg-3 col-sm-12 col-md-6 men ">
            <div class="card  justify-content-center m-auto border-0" style="width: 85%;">
              <div class="image">
                <img src="assets/imgs/item 2.jpg" class="card-img-top" alt="...">
                <div class="price">
                  <span>$150.00</span>
                </div>
                <div class="offer">
                  <span>20%</span><br>
                  <span>OFF</span>
                </div>
              </div>
              <div class="card-body">
                <div class="productname">
                  <p>Lorem, ipsum dolor.</p>
                </div>
                <div class="rate">

                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star star "></i>
                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star"></i>

                </div>
                <div class="actions mt-2">
                  <a href=""><i class="fa-regular fa-heart">      </i></a>
                  <a href=""><i class="fa-solid fa-share-nodes">  </i></a>
                  <a href=""><i class="fa-solid fa-cart-shopping"></i></a>

                </div>
              </div>
              <a href="#!">
                <div class="overlay text-light  justify-content-center flex-column text-center">
                  <a href="" class="btn btn-outline-light  text-center justify-content-center ">view collection</a>

                </div>
              </a>
            </div>
          </div>
          <!-- card 3 -->
          <div class="col-lg-3 col-sm-12 col-md-6 kids">
            <div class="card  justify-content-center m-auto border-0 " style="width: 85%;">
              <div class="image">
                <img src="assets/imgs/item 3.jpg" class="card-img-top" alt="...">
                <div class="price">
                  <span>$150.00</span>
                </div>
                <div class="offer">
                  <span>20%</span><br>
                  <span>OFF</span>
                </div>
              </div>
              <div class="card-body">
                <div class="productname">
                  <p>Lorem, ipsum dolor.</p>
                </div>
                <div class="rate">

                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star star "></i>
                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star"></i>

                </div>
                <div class="actions mt-2">
                  <a href=""><i class="fa-regular fa-heart">      </i></a>
                  <a href=""><i class="fa-solid fa-share-nodes">  </i></a>
                  <a href=""><i class="fa-solid fa-cart-shopping"></i></a>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-12 col-md-6 women">
            <div class="card  justify-content-center m-auto border-0" style="width: 85%;">
              <div class="image">
                <img src="assets/imgs/item 4.jpg" class="card-img-top" alt="...">
                <div class="price">
                  <span>$150.00</span>
                </div>
                <div class="offer">
                  <span>20%</span><br>
                  <span>OFF</span>
                </div>
              </div>
              <div class="card-body">
                <div class="productname">
                  <p>Lorem, ipsum dolor.</p>
                </div>
                <div class="rate">

                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star star "></i>
                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star star"></i>
                      <i class="fa-solid fa-star"></i>

                </div>
                <div class="actions m-2 ">
                  <a href=""><i class="fa-regular fa-heart">      </i></a>
                  <a href=""><i class="fa-solid fa-share-nodes">  </i></a>
                  <a href=""><i class="fa-solid fa-cart-shopping"></i></a>

                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>


    </div>
  </div>