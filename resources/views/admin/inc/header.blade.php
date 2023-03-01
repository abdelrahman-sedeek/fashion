<div id="right-panel" class="right-panel">
 <!-- Header-->
 <header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <span class="logo">Fashion</span>
            <a class="navbar-brand hidden" href="./"><img src="admin/images/logo2.png" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left">
                

                <div class="dropdown for-notification">
                    
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">You have 3 Notification</p>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-check"></i>
                            <p>Server #1 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-info"></i>
                            <p>Server #2 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-warning"></i>
                            <p>Server #3 overloaded.</p>
                        </a>
                    </div>
                </div>

                
            </div>

            <div class="user-area dropdown float-right ">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                   
                        <a class="nav-link p-1" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();"> Logout</a>
                    
                </form>
            </div>
        </div>
    </div>
</header>
<!-- /#header -->
<div class="content">