<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .errorMsg {
            width: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            background-color: lightgray;
        }

        .errorMsg img {
            width: 100%;
            height: 20rem;
        }

        .errorMsg h4 {
            text-align: center;
            font-size: 2rem;
            color: darkred;
        }

        .errorMsg h6 {
            text-align: center;
            font-size: 1.5rem;
        }

        .errorMsg a {
            text-decoration: none;
        }

        .errorMsg a:hover {
            color: darkred;
        }
    </style>
</head>

<body>

    {{-- @if ($errors->has('email'))
        <div class="alert alert-danger">
            {{ $errors->first('email') }}
        </div>
    @endif --}}


    <div class="errorMsg">
        <h4>Oops You have entered wrong Credetianls</h4>
        <h6><a href="{{ route('login.us') }}">Try again</a></h6>
        <img src="{{ asset('images/errors/error.png') }}" alt="Error Image">
    </div>



</body>

</html>
