<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>CodePen - Animated Login Form using Html &amp; CSS Only</title>

    <link rel="stylesheet" href="{{asset('css/appp.css')}}">

  
</head>

<body>
    <!-- partial:index.partial.html -->

    <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>

        <div class="signin">

            <div class="content">
                
@if(session()->has('message'))
<div class='links' >
<b>
    {{session('message')}}
</b>
</div>
@endif
                <h2>Sign up</h2>

                <form action="{{url('store')}}" method="POST">
                    @csrf
                    <div class="form">

                    <div class="inputBox">
                        @error('name')
                        <p class="alert alert-danger">{{$message}}</p>
                        @enderror
                        <input type="text" name='name' value="{{old('name')}}" required> <i>name</i>

                    </div>

                    <div class="inputBox">
                        @error('email')
                        <p class="alert alert-danger">{{$message}}</p>
                        @enderror
                        <input type="email" name='email'  value="{{old('email')}}" required> <i>Email</i>

                    </div>

                    <div class="inputBox">
                        @error('password')
                        <p class="alert alert-danger">{{$message}}</p>
                        @enderror

                        <input type="password" name='password'  value="{{old('username')}}" required> <i>Password</i>

                    </div>

                    <div class="links "><i> Already Have one !? </i><a href="/login">Login</a>

                    </div>

                    <div class="inputBox">

                        <input type="submit" value="Sign up">

                    </div>

                </div>

            </form>


            </div>

        </div>

    </section> <!-- partial -->

</body>
  

</html>