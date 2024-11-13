<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="{{ route('register.store') }}" method="POST" style="margin: 50px auto 0px; width: 500px; ">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Имя</label>
            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
            <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            @error('password')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Повтор пароля</label>
            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
            @error('password_confirmation')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" name="send" class="btn btn-primary">Отправить</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
