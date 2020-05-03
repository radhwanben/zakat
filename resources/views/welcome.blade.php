@extends('layouts.app')
@section('content')
  
  <div class="row">
            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">متى تجب الزكاة في المال </span>
                        <p>فالزكاة لا تجب في مال إلا إذا حال عليه الحول الهجري بعد بلوغه النصاب، وأما ما حال عليه الحول قبل بلوغ المال المدخر نصابا فلا تجب فيه الزكاة. فإن كان المال الذي تدخره قد حال عليه الحول الهجري وهو في ملكك بعد بلوغه نصابا فزكاته واجبة عليك، وكان الواجب عليك أن تبادر بإخراجها فور حولان الحول</p>
                    </div>
                    <div class="card-action">
                        <a href="shorturl.at/uEGP5" target="_blank">إقرأ المزيد <i class="material-icons">remove_red_eye</i></a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">حكم الزكاة </span>
                        <p>الزكاة أحد أركان الإسلام الخمسة التي بني عليها؛ لقول النبي صلى الله عليه وسلم: "بني الإسلام على خمس: شهادة أن لا إله إلا الله وأن محمداً رسول الله، وإقام الصلاة، وإيتاء الزكاة، وصوم رمضان، وحج بيت الله الحرام"، وهي فرض بإجماع المسلمين،
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="shorturl.at/uEGP5" target="_blank">إقرأ المزيد <i class="material-icons">remove_red_eye</i></a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">حكم تأخير الزكاة عن وقت وجوبها</span>
                        <p>لا يجوز تأخيرها عن وقت وجوبها إلا لعذر معتبر شرعاً، كأن يكون المال غائباً أو لم يجد في بلده مصرفاً من مصارف الزكاة، فإن أخرها دون عذر معتبر أثم، وعلى هذا فلا يجوز دفع الزكاة الثابتة في الذمة على أقساط، بل يلزم إخرجها كلها فوراً، </p>
                    </div>
                    <div class="card-action">
                        <a href="shorturl.at/uEGP5" target="_blank">إقرأ المزيد <i class="material-icons">remove_red_eye</i></a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">ما هو النصاب في المال</span>
                        <p>هو مقدار المال الذي لا تجب الزكاة في أقل منه ، وهو يختلف في مقداره باختلاف أنواع المال الزكوي، فمثلا النصاب في الإبل خمس، وفي الذهب خمسة وثمانون جراما، وفي الورق ( الفضة ) مائتا درهم أي ما يعادل ( 595 ) جراما ، وفي الأوراق المتعامل بها الآن قيمة النصاب من الذهب أو من الفضة.</p>
                    </div>
                    <div class="card-action">
                        <a href="shorturl.at/uEGP5" target="_blank">إقرأ المزيد <i class="material-icons">remove_red_eye</i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="sliderimg" >
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col m12 text-center heading-section heading-section-white ftco-animate fadeInUp ftco-animated">
            <h2 class="mb-0">الأصناف التي تجب فيها الزكاة</h2>
          </div>
        </div>	
    	</div>
    </section>

    <div class="container">
        <div class="row">
        <section>
            <a href="{{route('Zakatymoney')}}" >
            <div class="col s4 m3">
                <div class="card brown lighten-3">
                    <div class="card-content white-text">
                        <span class="card-title"><img class="icons" src="https://img.icons8.com/cute-clipart/64/000000/money.png"/>الأموال </span>
                    </div>
                    <div class="card-action">
                        احساب الأن <i class="material-icons">verified_user</i>
                    </div>
                </div>
            </div>
        </a>

        <a href="{{route('Zakatyglod')}}" >
            <div class="col s4 m3">
                <div class="card brown lighten-3">
                    <div class="card-content white-text">
                        <span class="card-title"><img class="icons" src="https://img.icons8.com/office/16/000000/gold-bars.png"/>الذهب </span>
                    </div>
                    <div class="card-action">
                        احساب الأن <i class="material-icons">verified_user</i>
                    </div>
                </div>
            </div>
        </a>

        <a href="{{route('Zakatysilver')}}">
            <div class="col s4 m3">
                <div class="card brown lighten-3">
                    <div class="card-content white-text">
                        <span class="card-title"><img class="icons" src="https://img.icons8.com/color/48/000000/silver-bars.png"/>الفضة  </span>
                    </div>
                    <div class="card-action">
                        احساب الأن <i class="material-icons">verified_user</i>
                    </div>
                </div>
            </div>
        </a>


        <a href="#" >
            <div class="col s4 m3">
                <div class="card brown lighten-3">
                    <div class="card-content white-text">
                        <span class="card-title"><img class="icons" src="https://img.icons8.com/flat_round/64/000000/cow--v1.png"/>النعم (الأنعام)   </span>
                    </div>
                    <div class="card-action">
                        احساب الأن <i class="material-icons">verified_user</i>
                    </div>
                </div>
            </div>
        </a>


        <a href="#" >
            <div class="col s4 m3">
                <div class="card brown lighten-3">
                    <div class="card-content white-text">
                        <span class="card-title"><img class="icons" src="https://img.icons8.com/plasticine/100/000000/stocks.png"/>الأسهم    </span>
                    </div>
                    <div class="card-action">
                        احساب الأن <i class="material-icons">verified_user</i>
                    </div>
                </div>
            </div>
        </a>

            



        <a href="#" >
            <div class="col s4 m3">
                <div class="card brown lighten-3">
                    <div class="card-content white-text">
                        <span class="card-title"><img class="icons" src="https://img.icons8.com/cute-clipart/64/000000/home.png"/>العقارات    </span>
                    </div>
                    <div class="card-action">
                        احساب الأن <i class="material-icons">verified_user</i>
                    </div>
                </div>
            </div>
        </a>




        <a href="#" >
            <div class="col s4 m3">
                <div class="card brown lighten-3">
                    <div class="card-content white-text">
                        <span class="card-title"><img class="icons" src="https://img.icons8.com/color/48/000000/raspberry.png"/>الثمار    </span>
                    </div>
                    <div class="card-action">
                        احساب الأن <i class="material-icons">verified_user</i>
                    </div>
                </div>
            </div>
        </a>





        <a href="#" >
            <div class="col s4 m3">
                <div class="card brown lighten-3">
                    <div class="card-content white-text">
                        <span class="card-title"><img class="icons" src="https://img.icons8.com/color/48/000000/cardboard-box.png"/>البضائع    </span>
                    </div>
                    <div class="card-action">
                        احساب الأن <i class="material-icons">verified_user</i>
                    </div>
                </div>
            </div>
        </a>
        
            </section>
        </div>
    </div>


    

    @endsection



  