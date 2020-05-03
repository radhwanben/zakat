@extends('layouts.app')
@section('content')

<div class="row" style="background-color:#ffffff45;color:#2bbbad">
            <div class="row">
            <form class="col m8 offset-m2 s12" method="POST" action="{{route('Zakatyglodcal')}}">
               {{ csrf_field() }}
                <div class="row">
                    <label class="labelvalue" for="goldvalue">وزن الذهب (عيار 24) بجرام</label>
                    <div class="input-field col s12">
                        <input id="gold" name="goldvalue" type="text">
                    <button class="btn btn-large green lighten-3" type="sbumit" name="action">احساب الأن <img  class="buttonicons" src="https://img.icons8.com/pastel-glyph/50/000000/calculator.png"/></button>

                    </div>
                </div>
                

            </form>
        </div>
    </div>


</div>
</div>
@endsection
