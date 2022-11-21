
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altamayouz school</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Tajawal:wght@400;500&display=swap" rel="stylesheet">
    <script>
        $(function(){
        $("#header").load(navbar.html);
        } )
    </script>
</head>
<body>



    <div class="box">

            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <h2>تسجيل الدخول </h2>
                <div class="inputBox">
                    <input type="text" id="email" name="email" value="{{ old('email') }}" required="required">
                    <span>البريد الإلكتروني</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input id="password" type="password" required="required" @error('password') is-invalid @enderror" name="password">
                    <span>كلمة السر</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="{{ route('password.request') }}">نسيت كلمة المرور</a>
                    <a href="{{route('register')}}">إنشاء حساب </a>
                </div>
                <input type="submit" value="تاكيد">


            </form>




    </div>

</body>
</html>
