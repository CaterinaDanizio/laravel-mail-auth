@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <form action="{{route('sendMail')}}" method="POST">
                    @csrf
                    @method('POST')
                    <label for="mail-form">Messaggio mail</label>
                    <input name="mail-form" type="text">
                    <br>
                    <br>
                    <input type="submit" value="INVIA">
                    <br>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection
