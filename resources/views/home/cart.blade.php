@include('home.inc.header')
@include('home.inc.navbar')
<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">
  
              <div class="row">
                @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('message')}}
                </div>
                @endif
                <div class="col-lg-7">
                  <h5 class="mb-3"><a href="{{route('home')}}" class="text-body"><i
                        class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                  <hr>
  
                 
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                      <p class="mb-1">Shopping cart</p>
                      <p class="mb-0">You have {{$cart_count}} items in your cart</p>
                    </div>
                    
                    </div>
                    <?php $subtotal=0; 
                          $tax=0;
                          $total=0;
                   ?>
                    @foreach ($cart as $cart )
                  
                    
                    @php 
                    
                   $subtotal+=$cart->total_price;
                   $tax=$subtotal*1/100;
                   $total=$subtotal+$tax
                   @endphp
                 
                    
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img
                              src="images/{{$cart->product->image}}"
                              class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5>{{$cart->product->product_name}}</h5>
                            <p class="small mb-0">{{$cart->product->discription}}</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 50px;">
                            <h5 class="fw-normal mb-0">{{$cart->quantity}}</h5>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">${{$cart->total_price}}</h5>
                          </div>
                          <form action="{{route('delete_cart',$cart->id)}}" method="post">
                            @csrf
                            <a onclick="this.closest('form').submit(); return false;" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                
                </div>
                <div class="col-lg-5">
  
                  <div class="card bg-primary text-white rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Card details</h5>
                        
                      </div>
  
                      <p class="small mb-2">Card type</p>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-visa fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-amex fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
  
                      
                      
                      

                      
                      <hr class="my-4">
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2">${{$subtotal}}</p>
                      </div>
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Shipping</p>
                        <p class="mb-2">$20.00</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">tax</p>
                        <p class="mb-2">${{$tax}}</p>
                      </div>
  
                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Total(Incl. taxes)</p>
                        <p class="mb-2">${{$total}}</p>
                      </div>
                      <form action="{{route('cheakout')}}" method="get">
                        <button type="submit" class="btn btn-info btn-block btn-lg">
                          <div class="d-flex justify-content-between">
                            <span>${{$total}} </span>
                            <span>  Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                          </div>
                        </button>
                        </form>
  
                    </div>
                  </div>
  
                </div>
             

  
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('home.inc.footer')
