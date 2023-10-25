<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cricket Score - always up to date</title>

    {{-- Favicon image --}}
    <link rel="shortcut icon" href="{{ asset('images/logos/images.png') }}" type="image/x-icon">

    {{-- bootstrap cdb start from here --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- font awesome cdn from here --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    {{-- jquery cdn start from here --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    {{-- Custom Css Link here --}}
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Login Form</header>
            <form action="{{ route('login.create') }}" method="POST">
                @csrf
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" required placeholder="Email or Phone">
                </div>

                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password" class="pass-key" required placeholder="Password">
                    <span class="show">SHOW</span>
                </div>

                <div class="pass">
                    <a href="#">Forgot Password?</a>
                </div>

                <div class="field">
                    <input type="submit" value="Login">
                </div>
            </form>

            <div class="login">
                Or login with
            </div>
            <div class="links">
                <div class="facebook">
                    <i class="fab fa-facebook-f"><span>Facebook</span></i>
                </div>
                <div class="instagram">
                    <i class="fab fa-instagram"><span>Instagram</span></i>
                </div>
            </div>
            <div class="signup">
                Don't have account?
                <a href="{{ route('register.us') }}">Signup Now</a>
            </div>
        </div>
    </div>








    <script>
        const pass_field = document.querySelector('.pass-key');
        const showBtn = document.querySelector('.show');
        showBtn.addEventListener('click', function() {
            if (pass_field.type === "password") {
                pass_field.type = "text";
                showBtn.textContent = "HIDE";
                showBtn.style.color = "#3498db";
            } else {
                pass_field.type = "password";
                showBtn.textContent = "SHOW";
                showBtn.style.color = "#222";
            }
        });
    </script>









    <script src="{{ asset('js/style.js') }}"></script>
</body>

</html>
