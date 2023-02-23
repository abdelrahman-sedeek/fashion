


<!------------------------ Footer ----------------------------------->
<footer>
  <div class="footer">
      <div class="container">
          <div class="row my-5">
              <div class="col-12 col-md-4">
                  <h3 class="footer-title mb-4">Categories</h3>
                  <ul class="list nav flex-column">

                                                      <li class="list-item"><a class="item"
                                  href="https://fashion.projects.karemcloud.com/category/men">Men</a>
                          </li>
                                                      <li class="list-item"><a class="item"
                                  href="https://fashion.projects.karemcloud.com/category/women">Women</a>
                          </li>
                                                      <li class="list-item"><a class="item"
                                  href="https://fashion.projects.karemcloud.com/category/kids">Kids</a>
                          </li>
                                                      <li class="list-item"><a class="item"
                                  href="https://fashion.projects.karemcloud.com/category/est-voluptate">est voluptate</a>
                          </li>
                                                      <li class="list-item"><a class="item"
                                  href="https://fashion.projects.karemcloud.com/category/exercitationem-quibusdam">exercitationem quibusdam</a>
                          </li>
                                              </ul>
              </div>
              <div class="col-12 col-md-4">
                  <h3 class="footer-title mb-4">Customer Service</h3>
                  <ul class="list nav flex-column">

                      <li class="list-item">
                          <a href="https://fashion.projects.karemcloud.com/user/orders" class="item">My Orders</a>
                      </li>
                      <li class="list-item"><a href="https://fashion.projects.karemcloud.com/cart" class="item">Cart</a></li>
                      <li class="list-item"><a href="https://fashion.projects.karemcloud.com/wishlist" class="item">Wishlist</a>
                      </li>
                                                      <form action="https://fashion.projects.karemcloud.com/logout" method="POST">
                              <input type="hidden" name="_token" value="hGcTMbXYKN0w19DpG5BvP8yILdtpDSXqABrD3NJH">
                              <li class="list-item"><a class="item" href="https://fashion.projects.karemcloud.com/logout"
                                      onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                              </li>
                          </form>
                                              </ul>
              </div>
              <div class="col-12 col-md-4">
                  <h3 class="footer-title mb-4">Find Us !</h3>
                  <span class="d-block mb-2">Our Social Media Links</span>
                  <span class="icons">
                      <a href="#"class="px-1"> <i class="fa-2x fab fa-facebook-square"></i></a>
                      <a href="#"class="px-1"> <i class="fa-2x fab fa-twitter-square"></i></a>
                      <a href="#"class="px-1"> <i class="fa-2x fab fa-youtube"></i></a>
                      <a href="#"class="px-1"> <i class="fa-2x fab fa-vimeo"></i></a>
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
                  <img src="assets/imgs/visa.svg" alt="Visa" />
                  <img src="assets/imgs/mastercard.svg" alt="Master Card" />
                  <img src="assets/imgs/paypal.svg" alt="PayPal" />
              </div>
          </div>
      </div>
  </div>
</footer>
</div>
<!-- <script src="assets/java script/script.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="details/lib/easing/easing.min.js"></script>
<script src="details/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="details/js/main.js"></script>
<script src="assets/JS/JQuery/jquery-3.6.0.min.js"></script>
<script src="assets/JS/isotope-docs/isotope.pkgd.min.js"></script>
<!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
{{-- <script src="assets/JS/bootsrap/bootstrap.min.js"></script> --}}
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
