@extends('layouts.app')
@section('content')

</div>
<section class="sextion" >
    <div class="container">
        <div class="row justify-content-center mb-5">
      <div class="col m12 text-center heading-section heading-section-white ftco-animate fadeInUp ftco-animated">
        <h2 class="mb-3">أنواع النعم (الأغنام )</h2>
      </div>
    </div>	
    </div>
</section>


<div class="container">
    <div class="row">
    <section>
        <a href="{{route('Zakatycamel')}}" >
        <div class="col s12 m4">
            <div class="card brown lighten-3">
                <div class="card-content white-text">
                    <span class="card-title"><img class="icons" src="https://img.icons8.com/dusk/64/000000/--camel.png"/>الإبل </span>
                </div>
                <div class="card-action">
                    احساب الأن <i class="material-icons">verified_user</i>
                </div>
            </div>
        </div>
        </a>

        <a href="{{route('Zakatycow')}}" >
        <div class="col s12 m4">
            <div class="card brown lighten-3">
                <div class="card-content white-text">
                    <span class="card-title"><img class="icons" src="https://img.icons8.com/plasticine/100/000000/cow.png"/>البقر  </span>
                </div>
                <div class="card-action">
                    احساب الأن <i class="material-icons">verified_user</i>
                </div>
            </div>
        </div>
        </a>

        <a href="{{route('Zakatysheep')}}">
        <div class="col s12 m4">
            <div class="card brown lighten-3">
                <div class="card-content white-text">
                    <span class="card-title"><img class="icons" src="https://img.icons8.com/plasticine/100/000000/sheep.png"/>الضأن (الغنم )  </span>
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
