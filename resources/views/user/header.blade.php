<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="/home">Fashion Mart<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item ">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                {{-- <li><a class="nav-link" href="/aboutus">About us</a></li> --}}
                <li><a class="nav-link" href="/order">order</a></li>
                <li><a class="nav-link" href="/shop">shop</a></li>
                <li><a class="nav-link" href="contact.html">Contact us</a></li>
            </ul>

            {{-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li class="d-flex nav-link">
                    @if(Session('user_name'))
                        {{ Session('user_name') }}
                    @endif
                    <a class="nav-link" href="{{ route('login') }}"><img src="{{ $actual_url. '/web_assets/images/user.svg'}}"></a></li>
                <li><a class="nav-link" href="{{ route('cart') }}"><img src="{{ $actual_url. '/web_assets/images/cart.svg'}}"></a></li>
            </ul> --}}

            {{-- // yha se --}}
            {{-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5" >
                <li class="d-flex align-items-center nav-link">
                    @if(Session('user_name'))
                        <span class="user-name me-2" style="font-size: 17px">{{ Session('user_name') }}</span>
                    @endif
                    <a class="nav-link" href="{{ route('login') }}">
                        <img src="{{ $actual_url. '/web_assets/images/user.svg'}}" alt="User">                        
                    </a>
                                            
                        <!-- Logout Button -->                                       
                    
               </li>
                <li>
                    <a class="nav-link" href="{{ route('cart') }}" style="margin-top: 7px">
                        <img src="{{ $actual_url. '/web_assets/images/cart.svg'}}" alt="Cart">
                    </a>
                </li>
            </ul> --}}
            
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li class="nav-item dropdown d-flex align-items-center">
                    @if(Session('user_name'))
                    {{-- <span class="user-name me-2" style="font-size: 17px";color: white;>{{ Session('user_name') }}</span> --}}
                    <span class="user-name me-2" style="font-size: 17px; color: white;">
                        {{ Session('user_name') }}
                    </span>
                    @endif
                    <div class="user-dropdown">
                        <a class="nav-link" href="#">
                            <img src="{{ $actual_url. '/web_assets/images/user.svg'}}" alt="User">                        
                        </a>
                        <div class="dropdown-menu">
                            {{-- <a href="#" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Settings</a> --}}
                            <form action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item logout-btn">Logout</button>
                            </form>
                        </div>
                    </div>
                </li>
                {{-- <li class="nav-item" style="position: relative;">
                    <a class="nav-link" href="{{ route('cart') }}">
                        <img src="{{ $actual_url. '/web_assets/images/cart.svg'}}" alt="Cart">
                        @if($cart_count > 0)
                        <span style="position: absolute; top: -5px; right: -10px; background: red; color: white; font-size: 12px; padding: 2px 6px; border-radius: 50%;">
                            {{ $cart_count }}
                        </span>
                        @endif
                    </a>
                </li> --}}
                <li class="nav-item" style="position: relative;">
                    <a class="nav-link" href="{{ route('cart') }}" style="display: inline-block; position: relative;">
                        <img src="{{ $actual_url. '/web_assets/images/cart.svg'}}" alt="Cart" style="width: 22px; height: 22px;">
                
                        @if($cart_count > 0)
                        <span style="
                            position: absolute;
                            top: -4px;
                            right: -6px;
                            background-color: #ff3d3d;
                            color: white;
                            font-size: 10px;
                            font-weight: bold;
                            padding: 0px 5px;
                            border-radius: 10px;
                            line-height: 16px;
                            min-width: 16px;
                            text-align: center;
                            box-shadow: 0 0 4px rgba(0,0,0,0.2);
                        ">
                            {{ $cart_count }} </span>
                        @endif
                    </a>
                </li>
                
            </ul>
           
            
            <style>
                .user-dropdown {
                    position: relative;
                    display: inline-block;
                }
                .dropdown-menu {
                    display: none;
                    position: absolute;
                    right: 0;
                    background: white;
                    min-width: 120px;
                    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                    border-radius: 4px;
                    padding: 5px 0;
                }
                .user-dropdown:hover .dropdown-menu {
                    display: block;
                }
                .dropdown-item {
                    display: block;
                    padding: 5px 15px;
                    color: #333;
                    text-decoration: none;
                }
                .dropdown-item:hover {
                    background: #f5f5f5;
                }
                .logout-btn {
                    color: #d33;
                }
            </style>
        </div>
    </div>
        
</nav>