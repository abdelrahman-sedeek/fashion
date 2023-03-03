


<!------------------------ Footer ----------------------------------->
<footer>
  <div class="footer">
      <div class="container">
          <div class="row my-5">
              <div class="col-12 col-md-4">
                  <h3 class="footer-title mb-4">Categories</h3>
                  <ul class="list nav flex-column">

                        <li class="list-item"><a class="item" href="">Men</a></li>
                        <li class="list-item"><a class="item"href="">Women</a></li>
                        <li class="list-item"><a class="item"href="">Kids</a></li>
                                                  
                    </ul>
              </div>
              <div class="col-12 col-md-4">
                  <h3 class="footer-title mb-4">Customer Service</h3>
                  <ul class="list nav flex-column">
                    @auth
                        
                    <li class="list-item">
                        <a href="" class="item">My Orders</a>
                    </li>
                    <li class="list-item"><a href="{{route('show_cart')}}" class="item">Cart</a></li>
                    <li class="list-item"><a href="{{route('show_watchlist')}}" class="item">Wishlist</a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li class="list-item"><a class="item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                        </li>
                    </form>

                    @else
                    <li class="list-item"><a class="item" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="list-item"><a class="item" href="{{ route('register') }}">Regester</a>
                    </li>
                    @endauth
                    </ul>
              </div>
              <div class="col-12 col-md-4">
                  <h3 class="footer-title mb-4">Find Us !</h3>
                  <span class="d-block mb-2">Our Social Media Links</span>
                  <span class="icons">
                      <a href="{{route('home')}}"class="px-1"> <i class="fa-2x fab fa-facebook-square"></i></a>
                      <a href="{{route('home')}}"class="px-1"> <i class="fa-2x fab fa-twitter-square"></i></a>
                      <a href="{{route('home')}}"class="px-1"> <i class="fa-2x fab fa-youtube"></i></a>
                      <a href="{{route('home')}}"class="px-1"> <i class="fa-2x fab fa-vimeo"></i></a>
                  </span>
              </div>
          </div>
      </div>
  </div>
  <div class="copyright">
      <div class="container">
          <div class="d-flex align-items-center">
              <p class="m-0">
                  © 2023 Abdelrahman Sedeek. All Rights Reserved. Fashion
              </p>
              <div class="money ms-auto">
                  <img src="{{asset('assets/imgs/visa.svg')}}" alt="Visa" />
                  <img src="{{asset('assets/imgs/mastercard.svg')}}" alt="Master Card" />
                  <img src="{{asset('assets/imgs/paypal.svg')}}" alt="PayPal" />
              </div>
          </div>
      </div>
  </div>
</footer>
</div>
<!-- <script src="assets/java script/script.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{asset('details/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('details/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('details/js/main.js')}}"></script>
<script src="{{asset('assets/JS/JQuery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/JS/isotope-docs/isotope.pkgd.min.js')}}"></script>
<!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   
   
   
   
   
<script>
      // init Isotope
      var $grid = $('#list').isotope({
        // options
      });
      // filter items on button click
      $('.filter-button-group').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
      });
      $.getJSON("{{route('get_order')}}", function (data) 
        {
          $("#hi").val('hi')
        }
        // console.log(data.total_price); 
        );
      // $.ajax({
      //   type: "GET",
      //   url: "{{route('get_order')}}",
      //   data: 
      //   {
          
      //     'id':$('#hi').val(),
      //   },
      //   dataType: "dataType",
      //   success: function (response) {
          
      //   }
      // });
    </script>
</body>
</html>
