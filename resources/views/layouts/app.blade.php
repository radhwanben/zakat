<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} " dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>زكاتي </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <!-- fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css " rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Styles -->


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/gtag.js')}}"></script>

    <!-- Scripts -->

</head>


<body>
    @include('sweet::alert')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a> @else
            <a href="{{ route('login') }}">Login</a> @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a> @endif @endauth
        </div>
        @endif

        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><img class="logo" src="https://pluspng.com/img-png/islam-hd-png-islam-png-hd-450.png" alt=""></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">القائمة </i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{route('contact')}}">اتصــل بنــا</a></li>
                    <li><a href="badges.html">المركز الإعلامي</a></li>
                    <li><a href="{{route('Zakaty')}}">زكــــــاتي</a></li>
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                </ul>
                <ul class="left hide-on-med-and-down">
                    <li><a class="btn-floating pulse"><i class="material-icons">person</i></a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a class="btn-floating pulse"><i class="material-icons">person</i></a></li>
        <li><a href="{{route('contact')}}">اتصــل بنــا</a></li>
            <li><a href="badges.html">المركز الإعلامي</a></li>
            <li><a href="{{route('Zakaty')}}">زكــــــاتي</a></li>
            <li><a href="{{route('home')}}">الرئيسية</a></li>
        </ul>
    </div>

    <div class="slider" style="height: 700px">
        <ul class="slides" style="height: 700px">
            <li>
                <img src="https://journalistesfaxien.tn/wp-content/uploads/2020/04/%D8%A7%D9%84%D8%B2%D9%83%D8%A7%D8%A9.jpg">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>   نتيح لك أخي المسلم  أو أختي المسلمة  حساب قيمة الزكاة إلكترونيًا</h3>
                    <h5 class="light grey-text text-lighten-3">
              <button class="btn waves-effect waves-light" type="submit" name="action">
                إقرأ المزيد  <i class="material-icons right">remove_red_eye</i>
              </button>
            </h5>
                </div>
            </li>
            <li>
                <img src="https://i.pinimg.com/originals/75/70/98/757098232381151a6e1fde03d724f517.jpg">
                <!-- random image -->
                <div class="caption right-align">
                    <h3>استدامة فريضة الزكاة، وإيصالها لمستحقيها في دقائق.</h3>
                    <h5 class="light grey-text text-lighten-3">
              <button class="btn waves-effect waves-light" type="submit" name="action">
                إقرأ المزيد  <i class="material-icons right">remove_red_eye</i>
              </button>
            </h5>
                </div>
            </li>
            <li>
                <img src="https://ayah.org.ph/wp-content/uploads/2019/02/6.jpg">
                <!-- random image -->
                <div class="caption right-align">
                    <h3>توطيد أواصر التكاتف والترابط المجتمعي من خلال تيسير أداء فريضة الزكاة وإيصالها لمستحقيها.​</h3>
                    <h5 class="light grey-text text-lighten-3">
              <button class="btn waves-effect waves-light" type="submit" name="action">
                إقرأ المزيد  <i class="material-icons right">remove_red_eye</i>
              </button>
            </h5>
                </div>
            </li>
            <li>
                <img src="https://clip.cookdiary.net/sites/default/files/wallpaper/mosque-clipart/220294/mosque-clipart-islamic-wallpaper-220294-4493578.jpg">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>تعظيم فريضة الزكاة كأحد أركان الإسلام الخمسة</h3>
                    <h5 class="light grey-text text-lighten-3">
              <button class="btn waves-effect waves-light" type="submit" name="action">
                إقرأ المزيد  <i class="material-icons right">remove_red_eye</i>
              </button>
            </h5>
                </div>
            </li>
        </ul>
    </div>

    <div class="container">

        @yield('content')

<footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">قيمة الزكاة</h5>
                        <p class="grey-text text-lighten-4">وعن أبي هُريرة : أَنَّ رسولَ اللَّه ﷺ قَالَ: مَا نَقَصَتْ صَدَقَةٌ مِنْ مَالٍ، وَمَا زَادَ اللَّهُ عَبْدًا بِعَفْوٍ إِلَّا عِزًّا، وَمَا تَوَاضَعَ أَحَدٌ للَّهِ إِلَّا رَفَعَهُ اللَّهُ رواه مسلم. </p>
                        <h6 class="white-text">ملحوظة </h6>
                        <p class="grey-text text-lighten-4">هذا الموقع صداقة جارية على صاحب الفكرة وجميع الفريق العمل عليها لا تبخلوا علينا بدعؤة جزاكم الله كل خير </p>
                        <p class="grey-text text-lighten-4"></p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">الروابط </h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">الرئيسية</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">زكــــــاتي</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">المركز الإعلامي</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">اتصــل بنــا</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2020 Copyright <a class="grey-text text-lighten-4 right" href="https://www.gdprogrammers.com/" target="_blank" class="">GDprogrammers</a>
                </div>
            </div>
        </footer>
    </div>
        <script>
            $(document).ready(function() {
                $('.slider').slider();
            });
            $(document).ready(function() {
                $('.sidenav').sidenav();
            });
        </script>
    </body>
    
    </html>