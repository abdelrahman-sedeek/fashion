<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fashion </title>
    <link rel="stylesheet" href="assets/CSS/all.min.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="assets/CSS/bootstrap/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner&family=Finlandica&family=Open+Sans:wght@300;400&family=Oswald:wght@200&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="details/css/style.css" rel="stylesheet">

</head>
<body>
    <div class="page ">
        
        
        <div class="navBar ">
            
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container ">
                    <span class="text-black-50">free shipping on all orders Over $75!</span>
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex space">
                              
                              @auth
                              
                              <li class="nav-item">
                                  <a class="nav-link active" aria-current="page" href="#">my account</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{route('show_watchlist')}}">watchlist</a>
                              </li>
                              
                              <a class="nav-link active" style="color:#e13ed7;" aria-current="page" href="{{route('show_cart')}}">
                                <i class="fa-solid fa-cart-shopping"></i> my cart
                            </a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                               
                                    <a class="nav-link " href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();"> Logout</a>
                                
                            </form>
                            
                          
                              @else
                          
                            <li class="nav-item mx-2">
                                <a class="nav-link " aria-current="page" href="{{route('login')}}">login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('register') }}">register</a>
                            </li>
                            @endauth
                                                        
                        </ul>
                        
                    </div>
                </div>
            </nav>
         </div>

        <!-- secend navbar(search) -->
       
        <!-- 3rd nav bar -->
        