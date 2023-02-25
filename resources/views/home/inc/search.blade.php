<div class="searchNav container mt-3 mb-4 py-3">
    <div class="row">
         <div class="col-xs-8 col-xs-offset-2">
            <form action="{{route('search')}}" method="GET">
                @csrf
                <div class="input-group search w-50 m-auto ">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search"  >
                    <button class="btn" type="submit" ><i class="fa-solid fa-magnifying-glass icon"></i></button>


                </div>
            </form>
        </div>
    </div>
</div>