 <!-- item bar -->
 <div class="itemBar  ">
    <ul class="button-group filter-button-group mb-2 d-flex justify-content-center">
      <li class="nav-item"><button class="btn btnBar"   data-filter="*"     > all   </button></li>
      @foreach ($category as  $category )
      <li class="nav-item"><button class="btn btnBar"   data-filter=".{{$category->category_type }}"> {{$category->category_type }} </button></li>
      @endforeach
    </ul>
  </div>
  <!--  end of item bar -->