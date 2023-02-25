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
                        
                        <hr class="mb-3" >
                        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <h3 class="mt-1 font-3xl font-weight-bold" >order informantion</h3>
                            </div>
                            
                </div>
                        <hr class="mb-3" >
                    
                  
                    
                    @php 
                   $tax=$subtotal*1/100;
                   $total=$subtotal+$tax
                   @endphp
                  
                 
                    
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between ">
                   
                        <form action="{{route('add_order')}}" method="post">
                          @csrf
                          <div class="row mb-3">
                          <div class="col ">
                            <label class="form-label" >Name</label>
                            <input type="text" id="hi" name="name" value="{{Auth::user()->name}}" class="form-control w-100"  >
                          </div>
                          <div class="col">
                            <label class="form-label" >Phone</label>
                            <input type="text" name="phone" value="{{Auth::user()->phone}}"  class="form-control"  >
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">address</label>
                          <input type="text" name="address"  value="{{Auth::user()->address}}" class="form-control border-gray-90" id="formGroupExampleInput" >
                        </div>
                        
                        <div class="row mb-3">
                          <div class="col ">
                            <label class="pieLabel " >city</label>
                            <input type="text" name="city" class="form-control w-100" value="{{Auth::user()->city}}" aria-label="First name">
                          </div>
                          <div class="col">
                            <label class="pieLabel " >country</label>
                            <input type="text" name="country" class="form-control" value="{{Auth::user()->country}}" aria-label="Last name">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
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
                     
                        <button type="submit" class="btn btn-info btn-block btn-lg">
                          <div class="d-flex justify-content-between">
                            <span>  place order <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
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