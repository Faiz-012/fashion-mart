<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('user/header_link')
  <link href="{{ $actual_url }}/web_assets/css/style_lr.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    
    @if(Session('fail'))
    <div class="alert alert-danger" style="position: absolute;top:0;right:0" role="alert">
       {{ Session('fail') }}  
    </div>
    @endif
    <div class="container">
        <div class="form-box login">
            <form action="{{ route('userlogin') }}" method='POST'>
                @csrf
                <h1>Login</h1>
                <div class="input-box">
                    <input type="email" placeholder="Email" name="email" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            <div class="forgot-link">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
           
            </form>
        </div>
        <div class="form-box register">
            <form action="{{ route('registration') }}" method="POST">
                @csrf
                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Email" name="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="number" placeholder="Phone number" name="Phonenumber"  required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Enter Address" name="Address"  required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            
            <button type="submit" class="btn">Register</button>
            
            </form>
        </div>
        <div class="toggle-box">
            <div class="toggle-panel  toggle-left">
                <h1>Hello,Welcome!</h1>
                <p>Don't have an account</p>
                <button class="btn register-btn">Register</button>
            </div>
            <div class="toggle-panel  toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>
        </div>
        @include('/user/footer_link')
<script src="{{ $actual_url }}/web_assets/js/app.js"></script>

</body>
</html>