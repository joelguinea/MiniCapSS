@extends('base')

@section('content')

@section('title', 'Register')
<body>
    <div class="container col-md-4 offset-md-4" style="margin-top: 3%;">
        <div class="card shadow mb-5 border border-light rounded" style="background-color: rgb(41,41,41)" id="card">
            <div>
                <h1 class='text-center text-warning mt-1'>Register</h1>
            </div>
            <div class="card-body">
                <form action="{{ '/register' }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <input type="name" name="name" id="name" placeholder="Name" class="form-control transparent-input">
                        </div>
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="text-white">Male: <input type="radio" name="gender" id="male" placeholder="" value="male"></span>
                            <span style="margin-left: 5px" class="text-white">Female: <input type="radio" name="gender" id="female" placeholder="" value="female"></span>
                        </div>
                        @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control transparent-input">
                        </div>
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control transparent-input">
                            <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunction()"><i class="fa fa-eye"></i></span>
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control transparent-input">
                            <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunction()"><i class="fa fa-eye"></i></span>
                        </div>
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="text-center">
                            <button class="btn btn-primary px-3 form-control mb-3">Register</button>
                            <a style="text-decoration: none; color: white; background-color:; padding: 5px; border-radius: 5px; font-size: 18px;" href="{{ '/' }}">Already have an account</a>
                        </div>
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
