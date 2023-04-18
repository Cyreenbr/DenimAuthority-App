 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Ludiflex | Login</title>

</head>
<body >
   <div class="box">
    <div class="container">


 @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif 
        <form method="POST" action="{{ route('login') }}">
            @csrf

        <div class="top">
            <span>Have an account?</span>
            <header>Login</header>
        </div>

        <div class="input-field">
            <input name="email" type="email" class="input block mt-1 w-full" 
           :value="old('email')" required autofocus  placeholder="Email" id="email">


            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input name="password" id="password" type="Password" class="input block mt-1 w-full" data type="password" required autocomplete="current-password" placeholder="Password" id="password">

         
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Login" id="">
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="remember" id="remember_me" >
               <label for="remeber_me"> Remember Me</label>
            </div>

            @if (Route::has('password.request'))

            <div class="two">
                <label><a href="{{ route('password.request') }}">Forgot password?</a></label>
            </div>
           @endif
        </div>
    </form>
    </div>
</div>  
</body>
</html>