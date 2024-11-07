<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
<div class="container">
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="mt-4 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="inputPassword">
                @error('name')
                <span style="color: red; font-weight: bold">{{ $message }}</span>
                @enderror
            </div>

        </div>
        <div class="mt-4 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="inputPassword">
                @error('email')
                <span style="color: red; font-weight: bold">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mt-4 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword">
                @error('password')
                <span style="color: red; font-weight: bold">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mt-4 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Confirm password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password_confirmation" id="inputPassword">
                @error('password_confirm')
                <span style="color: red; font-weight: bold">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit" style="display: block; margin: 20px auto" class="btn btn-primary">Register</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
