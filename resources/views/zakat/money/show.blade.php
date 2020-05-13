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

    <div class="row">
        <div class="col s12 m6">
            <ul class="collection">
                <li class="collection-item avatar">
                <img src="https://img.icons8.com/cute-clipart/64/000000/checked-checkbox.png" alt="" class="circle">
                <span class="title">النقود </span>
                <p>أموال تجب فيها الزكاة</p>
                </li>
            </ul>
        </div>

        <div class="col s12 m6">
            <ul class="collection">
                <li class="collection-item avatar">
                <img src="https://img.icons8.com/cute-clipart/64/000000/checked-checkbox.png" alt="" class="circle">
                <span class="title">عروض التجارة </span>
                <p>أموال تجب فيها الزكاة</p>
                </li>
            </ul>
        </div>

        <div class="col s6 m3">
            <ul class="collection">
                <li class="collection-item avatar">
                <img src="https://img.icons8.com/flat_round/64/000000/no-entry.png" alt="" class="circle">
                <span class="title">أموال مؤجرة </span>
                <p>أموال لا تجب فيها الزكاة </p>
                </li>
            </ul>
        </div>

        <div class="col s6 m3">
            <ul class="collection">
                <li class="collection-item avatar">
                <img src="https://img.icons8.com/flat_round/64/000000/no-entry.png" alt="" class="circle">
                <span class="title">أموال مستثمرة </span>
                <p>أموال لا تجب فيها الزكاة </p>
                </li>
            </ul>
        </div>

        <div class="col s6 m3">
            <ul class="collection">
                <li class="collection-item avatar">
                <img src="https://img.icons8.com/flat_round/64/000000/no-entry.png" alt="" class="circle">
                <span class="title">أموال إستهلاكية </span>
                <p>أموال لا تجب فيها الزكاة </p>
                </li>
            </ul>
        </div>

        <div class="col s6 m3">
            <ul class="collection">
                <li class="collection-item avatar">
                <img src="https://img.icons8.com/flat_round/64/000000/no-entry.png" alt="" class="circle">
                <span class="title">ديون لك أو عليك </span>
                <p>أموال لا تجب فيها الزكاة </p>
                </li>
            </ul>
        </div>
        
    </div>


<div class="row" style="background-color:#ffffff45;color:#2bbbad">
            <div class="row">
              
            <form class="col m8 offset-m2 s12" method="POST" action="{{route('Zakatymoneycal')}}">
               {{ csrf_field() }}
                <div class="row">
                    <select name="year">
                        <option disabled selected>اختر السنة</option>
                        <option value="hijri"> السنة الهجرية</option>
                        <option value="miladi"> السنة الميلادية</option>
                      </select>
                    <label class="labelvalue" for="moneyvalue"> </label>
                    <div class="input-field col s12">
                        <input id="gold" name="moneyvalue" type="text" placeholder="مبلغ النقد">
                    <button class="btn btn-large green lighten-3" type="sbumit" name="action">احساب الأن <img  class="buttonicons" src="https://img.icons8.com/pastel-glyph/50/000000/calculator.png"/></button>

                    </div>
                </div>
           
                

            </form>

           
    </div>
    


</div>
</div>
@endsection
