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
                    <label for="mailForm">Messaggio mail</label>
                    <input name="mailForm" type="text">
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
