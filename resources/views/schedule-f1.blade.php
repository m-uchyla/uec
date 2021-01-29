@extends('layouts.f1')
@section('content')
<head>
<title>Terminarz | UEC F1</title>
</head>
<div class="f1-background">
    <div class="section-1-f1">
    <div class="special-backgorund">
    <h1 class="name-page">Terminarz</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
                <div class="schedule-name">Bahrajn</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/bahrain_flag.png', true) }}" alt="bahrain-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/bahrain1.png', true) }}" alt="bahrain-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">3 marca 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Bahrain International Circuit</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">5.412 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">29</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">156.948 km</div> 
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 term-tor">
            <div class="schedule-name">Wietnam</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/vietnam_flag.png', true) }}" alt="bahrain-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/vietnam1.png', true) }}" alt="bahrain-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">7 marca 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Hanoi Street Circuit</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">5.613 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">28</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">157.164 km</div> 
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
            <div class="schedule-name">Holandia</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/netherland_flag.png', true) }}" alt="bahrain-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/netherland1.png', true) }}" alt="bahrain-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">10 marca 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Circuit Zandvoort</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">4.259 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">36</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">153.324 km</div> 
                </div>
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
    </div>
    </div>
</div>-
@endsection