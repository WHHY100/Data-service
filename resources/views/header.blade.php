@extends('layout')

@section('header')
    <div class="divToFixedTop">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
            <span class="badge badge-secondary">FREE</span>
            <a class="navbar-brand" href="/">Data Service</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="/CEIDG">CEIDG</a>
                    <a class="nav-link" href="/Coronavirus">Coronavirus</a>
                    <a class="nav-link" href="/Coronavirus_Polska">Coronavirus Polska</a>
                </div>
            </div>
        </nav>
    </div>
@endsection
