@extends('base')

@section('content')

@section('title', 'Log in')
<body>
    <div class="container col-md-4 offset-md-4" style="margin-top: 10%;">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="card shadow rounded border border-light" style="background-color: rgb(41,41,41)" id="card">
            <div>
                <h2 class="text-center text-warning mt-3">LOG IN</h2>
            </div>
            <div class="card-body">
                <form action="{{ '/' }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control transparent-input">
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-4 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control transparent-input">
                        <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunction()"><i class="fa fa-eye"></i></span>
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-center">
                        <div>
                            <button class="btn btn-primary px-3 form-control mb-3" type="submit">Login</button>
                            <a style="text-decoration: none; color: white; background-color: primary; padding: 2px; border-radius: 5px; font-size: 18px;" href="{{ '/register' }}">Sign up for an account</a>
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>

@endsection

<style>
body{
    background-color: #bd4bb1;
    background-image: url("images/stud.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
    box-sizing: border-box;
    overflow: hidden;
}
#card {
    background: transparent;
}

input::placeholder {
    color: black !important;
}

</style>
<script>
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
