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
            <div class="col-sm col-md-6 col-lg-4">
                <!--<div class="schedule-name">Bahrajn</div>
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
                </div> <!-->
                <div class="schedule-tor">
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
                    <div class="schedule-header">Wyniki wyścigu</div>
                    <div class="schedule-box-results">
                        <div class="schedule-data">1. Jan Kowalski</div>
                    </div>
                    <div class="schedule-box-results">
                        <div class="schedule-data">2. Kowal Jankowski</div>
                    </div>
                    <div class="schedule-box-results">
                        <div class="schedule-data">3. Michał Michałowski</div> 
                    </div>
                    <div class="button-section-5">
                        <a href="{{ route('schedule-f1') }}" class="button-f1-sec5">Zobacz wyniki</a>
                    </div>   
                </div> 
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <div class="schedule-tor">
                    <div class="schedule-name">Wietnam</div>
                        <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/vietnam_flag.png', true) }}" alt="vietnam-flag">
                        <img class="schedule-track" src="{{ asset('resources/main/img/tracks/vietnam1.png', true) }}" alt="vietnam-track">
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
                <div>
            </div>
            <div class="col-sm col-md-6 col-lg-4">
                <div class="schedule-tor">
                    <div class="schedule-name">Holandia</div>
                        <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/netherland_flag.png', true) }}" alt="netherland-flag">
                        <img class="schedule-track" src="{{ asset('resources/main/img/tracks/netherland1.png', true) }}" alt="netherland-track">
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
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
            <div class="schedule-name">Monako</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/monaco_flag.png', true) }}" alt="monaco-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/monaco1.png', true) }}" alt="monaco-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">14 marca 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Circuit de Monaco</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">3.337 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">39</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">130.143 km</div> 
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
            <div class="schedule-name">Azerbejżan</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/baku_flag.png', true) }}" alt="azerbaijan-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/baku1.png', true) }}" alt="azerbaijan-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">17 marca 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Baku City Circuit</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">6.003 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">26</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">156.078 km</div> 
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
            <div class="schedule-name">Kanada</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/canada_flag.png', true) }}" alt="canada-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/canada1.png', true) }}" alt="canada-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">21 marca 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Circuit Gilles-Villeneuve</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">4.361 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">35</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">152.635 km</div> 
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
            <div class="schedule-name">Austria</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/austria_flag.png', true) }}" alt="austria-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/austria1.png', true) }}" alt="austria-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">24 marca 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Red Bull Ring</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">4.318 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">36</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">155.448 km</div> 
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
            <div class="schedule-name">Wielka Brytania</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/gb_flag.png', true) }}" alt="gb-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/gb1.png', true) }}" alt="gb-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">28 marca 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Silverstone Circuit</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">5.891 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">26</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">153.099 km</div> 
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
            <div class="schedule-name">Węgry</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/hungary_flag.png', true) }}" alt="hungary-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/hungary1.png', true) }}" alt="hungary-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">7 kwietnia 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Hungaroring</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">4.381 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">35</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">153.315 km</div> 
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
            <div class="schedule-name">Belgia</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/belgium_flag.png', true) }}" alt="belgium-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/belgium1.png', true) }}" alt="belgium-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">11 kwietnia 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Circuit de Spa-Francorchamps</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">7.004 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">22</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">154.027 km</div> 
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
            <div class="schedule-name">Włochy</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/italy_flag.png', true) }}" alt="italy-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/italy1.png', true) }}" alt="italy-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">14 kwietnia 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Autodromo Nazionale Monza</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">5.793 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">27</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">156.411 km</div> 
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 schedule-tor">
            <div class="schedule-name">Brazylia</div>
                <img class="schedule-track-flag" src="{{ asset('resources/main/img/tracks/brasil_flag.png', true) }}" alt="brasil-flag">
                <img class="schedule-track" src="{{ asset('resources/main/img/tracks/brasil1.png', true) }}" alt="brasil-track">
                <div class="schedule-box">
                    <div class="schedule-title">Data wyścigu</div>
                    <div class="schedule-data">18 kwietnia 2021</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Nazwa toru</div>
                    <div class="schedule-data">Autódromo José Carlos Pace</div>
                </div>
                <div class="schedule-header">Dane wyścigu</div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość okrążenia</div>
                    <div class="schedule-data">4.309 km</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Ilość okrążeń</div>
                    <div class="schedule-data">36</div>
                </div>
                <div class="schedule-box">
                    <div class="schedule-title">Długość wyścigu</div>
                    <div class="schedule-data">155.124 km</div> 
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
@endsection