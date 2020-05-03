@extends('layouts.app')
@section('content')

<div class="row" style="background-color:#ffffff45;color:#2bbbad">
    <div class="col m10 offset-m1 s12">
        <h2 class="center-align">إتصل بنا </h2>
        <div class="row">
            <form class="col m8 offset-m2 s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text">
                        <label for="name">الإسم </label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" class="form-input">
                        <label for="email">الايميل </label>
                    </div>
                    <div class="input-field col s12">
                      <textarea id="message" class="materialize-textarea"></textarea>
                      <label for="message">الرسالة </label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col m12">
                     <p class="right-align"><button class="btn btn-large waves-effect waves-light" type="button" name="action">إتصل بنا </button></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

@endsection
