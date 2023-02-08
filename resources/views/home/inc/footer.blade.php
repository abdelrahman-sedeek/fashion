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
<script src="assets/JS/bootsrap/bootstrap.min.js"></script>
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
