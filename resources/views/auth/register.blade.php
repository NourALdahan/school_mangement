<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> register Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&family=Lateef&family=Lobster&family=Montserrat:ital,wght@0,100;0,200;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/reg.css">
</head>

<body>
    <section>
        <div class="imgBx">
            <img src="img/R.jfif" alt="">
        </div>
        <div class="contentBx">
            <form class="formBx" method="POST" action="{{ route('register') }}">
                @csrf

                    <div class="inputBx">
                        <label for=""> الإسم الأول</label>
                        <input input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">
                    </div>

                     <div class="inputBx">
                        <label for=""> الكنية</label>
                        <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
                    </div>

                    <div class="inputBx">
                        <label for="">البريد الإلكتروني</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" >
                    </div>

                    <div class="inputBx">
                        <label for="">كلمة المرور</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password">
                    </div>

                    <div class="inputBx">
                        <label for=""> إعادة كلمة المرور </label>
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" >
                    </div>

                    <div class="remeber">
                        <label for=""><input type="checkbox"> تذكرني </label>
                    </div>

                    <div class="inputBx">
                        <input type="submit" value="تسجيل الدخول">
                    </div>

                    <div class="inputBx">
                        <p> هل لديك حساب من قبل؟  <a href="login.html"> تسجيل الدخول </a></p>
                    </div>

                    <h3>تسجيل الدخول  عبر منصات التواصل الاجتماعي</h3>
                    <ul class="sci">
                        <li><img src="img/facebook1.png" alt="" width="30px"></li>
                        <li><img src="img/instigram.png" alt="" width="30px"></li>
                        <li><img src="img/twitter.png" alt="" width="30px"></li>
                    </ul>


            </form>
        </div>
    </section>
</body>
</html>
