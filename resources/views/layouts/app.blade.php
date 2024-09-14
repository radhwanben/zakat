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
@include('sweetalert::alert')

<nav>
    <div class="nav-wrapper">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">القائمة </i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{route('contact')}}">اتصــل بنــا</a></li>
            <li><a href="{{route('Zakaty')}}">زكــــــاتي</a></li>
            <li><a href="{{route('home')}}">الرئيسية</a></li>
        </ul>
        <ul class="left hide-on-med-and-down">
            <li>
                <a class="waves-effect waves-light btn-large" href=""> احتساب الزكاة</a></li>
        </ul>
    </div>
</nav>

    <div class="container">

        @yield('content')


            <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ebc69dc8ee2956d73a0e46f/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
    </div>
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
        </footer>
        <script>
            $(document).ready(function() {
                $('.slider').slider();
            });
            $(document).ready(function() {
                $('.sidenav').sidenav();
            });
            $(document).ready(function(){
                $('select').formSelect();
            });

        </script>
    </body>

    </html>
