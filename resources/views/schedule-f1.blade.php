@extends('layouts.f1')
@section('content')
<head>
<title>Terminarz | UEC F1</title>
</head>
<div class="f1-background">
    <h1 class="name-page">Terminarz</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
                <div class="schedule-name">Bahrian</div>
                <div class="schedule-track-flag">
                    <img style="width:100%" src="{{ asset('resources/main/img/tracks/bahrain_flag.png', true) }}" alt="bahrain-flag">
                </div>
                <div class="schedule-track">
                    <img style="width:100%" src="{{ asset('resources/main/img/tracks/bahrain1.png', true) }}" alt="bahrain-track">
                </div>
                <div class="schedule-track-date">3 marca 2021</div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 term-tor">
                <p class="schedule-name">Wietnam</p>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <p class="schedule-name">Azerbejdżan</p>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <p class="schedule-name">Monako</p>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <p class="schedule-name">Kanada</p>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <p class="schedule-name">Austria</p>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <p class="schedule-name">Wielka Brytania</p>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <p class="schedule-name">Węgry</p>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <p class="schedule-name">Belgia</p>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <p class="schedule-name">Holandia</p>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <p class="schedule-name">Włochy</p>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <p class="schedule-name">Brazylia</p>
            </div>
        </div>
    </div>
</div>-
@endsection