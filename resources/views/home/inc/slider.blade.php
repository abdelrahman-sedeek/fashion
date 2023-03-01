<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{asset('assets/imgs/slider 1.jpg')}}" class="d-block w-100" alt="..." />
              <div class="carousel-text">
                  <span>Something Is Better</span>
                  <span>Fashion Lorrem</span>
              </div>
          </div>
          <div class="carousel-item">
              <img src="{{asset('assets/imgs/slider 2.jpg')}}" class="d-block w-100" alt="..." />
              <div class="carousel-text">
                  <span>Something Is Better</span>
                  <span>Fashion Lorrem</span>
              </div>
          </div>
          <div class="carousel-item">
              <img src="{{asset('assets/imgs/slider 3.jpg')}}" class="d-block w-100" alt="..." />
              <div class="carousel-text" >
                  <span>Something Is Better</span>
                  <span>Fashion Lorrem</span>
              </div>
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <i class="fa-regular fa-circle-left fs-1 text-dark"></i>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <i class="fa-regular fa-circle-right fs-1 text-dark"></i>
          <span class="visually-hidden">Next</span>
      </button>
  </div>
</section>
  <!-- end of slider -->
  <section class="section first-section my-5">
    <div class="container">
        <div class="row gy-5">
            <div class="col-12 col-md-5 order-md-last">
                <div class="row d-flex flex-md-column justify-content-center align-items-center">
                    <div class="col-6 col-md-12">
                        <div class="first-img pb-md-5">
                            <img class="w-100"
                                src="{{asset('assets/imgs/card 3.jpg')}}"alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-12">
                        <div class="second-img">
                            <img class="w-100"
                                src="{{asset('assets/imgs/card 2.jpg')}}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="single-img">
                    <img class="w-100" src="{{asset('assets/imgs/card 1.jpg')}}"
                        alt="" />
                </div>
                <div class="content">
                    <span class="content-hot">Hot Collection</span>
                    <h2 class="content-title">New Trend For Women</h2>
                    <p class="text-wrap">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Pariatur reprehenderit <br />
                        adipisci minus, tenetur voluptas natus at harum quasi.
                        Dignissimos <br />
                        explicabo ex corrupti
                    </p>
                    <a href="{{route('home')}}" class="btn btn-outline-dark rounded-0 px-5 py-2">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>