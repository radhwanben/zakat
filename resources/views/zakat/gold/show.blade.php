@extends('layouts.app')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row" style="background-color:#ffffff45;color:#2bbbad">
            <div class="row">
            <form class="col m8 offset-m2 s12" method="POST" action="{{route('Zakatyglodcal')}}">
               {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <select name="year">
                            <option disabled selected>اختر السنة</option>
                            <option value="hijri"> السنة الهجرية</option>
                            <option value="miladi"> السنة الميلادية</option>
                          </select>
                        <input id="gold" name="goldvalue" type="text" placeholder="وزن الذهب (عيار 24) بجرام">
                    <button class="btn btn-large green lighten-3" type="sbumit" name="action">احساب الأن <img  class="buttonicons" src="https://img.icons8.com/pastel-glyph/50/000000/calculator.png"/></button>

                    </div>
                </div>
                

            </form>
        </div>
    </div>


</div>
</div>
@endsection
