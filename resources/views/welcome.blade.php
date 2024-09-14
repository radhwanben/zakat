@extends('layouts.app')
@section('content')



    <div class="row">


            <div class="col s12 m6">
                <img id="wallpaper-1"  src="https://zakatcenterindia.org/wp-content/uploads/2022/03/Zakat-online-2.png"  alt="">
            </div>

            <div class="col s12 m6">
                        <h1 id="big-title"> الزكاة</h1>
                        <ul>
                            <li>
                                <p>الزكاة أحد أركان الإسلام الخمسة التي بني عليها؛ لقول النبي صلى الله عليه وسلم: "بني الإسلام على خمس: شهادة أن لا إله إلا الله وأن محمداً رسول الله، وإقام الصلاة، وإيتاء الزكاة، وصوم رمضان، وحج بيت الله الحرام"، وهي فرض بإجماع المسلمين،
                                </p>
                            </li>
                            <h2 id="second-title"> متى تجب الزكاة في المال</h2>
                            <li>
                                <p>فالزكاة لا تجب في مال إلا إذا حال عليه الحول الهجري بعد بلوغه النصاب، وأما ما حال عليه الحول قبل بلوغ المال المدخر نصابا فلا تجب فيه الزكاة. فإن كان المال الذي تدخره قد حال عليه الحول الهجري وهو في ملكك بعد بلوغه نصابا فزكاته واجبة عليك، وكان الواجب عليك أن تبادر بإخراجها فور حولان الحول</p>
                            </li>
                            <h3 id="three-title">حكم تأخير الزكاة عن وقت وجوبها</h3>
                            <li>
                                <p>لا يجوز تأخيرها عن وقت وجوبها إلا لعذر معتبر شرعاً، كأن يكون المال غائباً أو لم يجد في بلده مصرفاً من مصارف الزكاة، فإن أخرها دون عذر معتبر أثم، وعلى هذا فلا يجوز دفع الزكاة الثابتة في الذمة على أقساط، بل يلزم إخرجها كلها فوراً، </p>
                            </li>
                        </ul>
                </div>
            </div>

            <div class="col s12 m12">
                        <h1 id="big-title">ما هو النصاب في المال</h1>
                        <p>هو مقدار المال الذي لا تجب الزكاة في أقل منه ، وهو يختلف في مقداره باختلاف أنواع المال الزكوي، فمثلا النصاب في الإبل خمس، وفي الذهب خمسة وثمانون جراما، وفي الورق ( الفضة ) مائتا درهم أي ما يعادل ( 595 ) جراما ، وفي الأوراق المتعامل بها الآن قيمة النصاب من الذهب أو من الفضة.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    	<div class="container">
                <h2 id="second-title">الأصناف التي تجب فيها الزكاة</h2>
    	</div>

    <div class="container">
        <div class="row">
            <div class="col s6 m6">
                <img id="wallpaper-1" src="https://img.freepik.com/free-vector/flat-ramadan-charity-background-with-muslim-people-giving-money-food-hungry-homeless-illustration_1284-61988.jpg?t=st=1726313610~exp=1726317210~hmac=3d22e49d96fdaf703ee7e4f7af4525b28b2e0adb836dbcd69754c8bec32cbd2a&w=1380"  alt="">
            </div>
            <div class="col s6 m6">
                <section>
                    <a href="{{route('Zakatymoney')}}" >
                        <div class="col s2 m6">
                            <div class="card teal accent-4">
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
                        <div class="col s2 m6">
                            <div class="card teal accent-4">
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
                        <div class="col s2 m6">
                            <div class="card teal accent-4">
                                <div class="card-content white-text">
                                    <span class="card-title"><img class="icons" src="https://img.icons8.com/color/48/000000/silver-bars.png"/>الفضة  </span>
                                </div>
                                <div class="card-action">
                                    احساب الأن <i class="material-icons">verified_user</i>
                                </div>
                            </div>
                        </div>
                    </a>


                    <a href="{{route('Zakatyanimals')}}" >
                        <div class="col s2 m6">
                            <div class="card teal accent-4">
                                <div class="card-content white-text">
                                    <span class="card-title"><img class="icons" src="https://img.icons8.com/flat_round/64/000000/cow--v1.png"/>النعم (الأنعام)   </span>
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
    </div>




    @endsection



