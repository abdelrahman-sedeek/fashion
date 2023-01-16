@include('home.inc.header')
@include('home.inc.navbar')
<div class="container-fluid bg-secondary mb-5 ">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{route('home')}}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop Detail</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Shop Detail Start -->
@if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{session()->get('message')}}
    </div>
    @endif
<div class="container py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div  class="" >
                <div class=" border">
                    <div class=" active max-h-32">
                        <img class="w-100 h-50" src="images/{{$detail->image}} " alt="Image">
                    </div>
                   
                </div>
                
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h1 class="font-weight-semi-bold font-3xl">{{$detail->product_name}}</h1>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
               
            </div>
            <div class="row">
                @if ( $detail->discount_price !=null)
               <div class="col col-sm-12">
                    
                   <h3 class="font-weight-semi-bold mb-4   after_discount" >{{$detail->product_price }} $</h3>
                </div> 
                @endif
               <div class="col col-sm-12">
                   <h3 class="font-weight-semi-bold mb-4  before_discount">{{$detail->product_price - $detail->discount_price}} $</h3>
                </div> 
            
            </div>
            <p class="mb-4">
               {{$detail->discription}} 
            </p>
           
            <div class="d-flex align-items-center mb-4 pt-2  ">
                
                <form action="{{route('add_cart',$detail->id)}}" method="post" >
                    @csrf
                    <div class="input-group quantity mr-3 mb-4" style="width: 130px;">
                        <div class="input-group-btn">
                            <button  type="button" class="btn btn-primary bg-primary  btn-minus">
                            <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" name="OrderQuantity"  class="form-control bg-secondary text-center bg-white border-0 col col-sm-12 " min="1" value="1">
                        <div class="input-group-btn">
                            <button type="button"  class="btn btn-primary  bg-primary btn-plus" >
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                        
                        
                    </div>
                    <button  class="btn btn-primary px-2 " type="submit "><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                </form>
            </div>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- Shop Detail End -->

@include('home.inc.footer')