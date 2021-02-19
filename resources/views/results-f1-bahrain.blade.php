@extends('layouts.f1')
@section('content')
<head>
<title>Wyniki - Bahrajn</title>
</head>
<div class="f1-background pad-results" >
    <h1 class="name-page">Wyniki - Bahrajn</h1>
    <div class="margin-results">
        <table class="table table-striped table-dark table-f1 table-f1-results">
        <thead>
            <tr id="head-border-results">
            <th scope="col" id="no-border" class="table-results-place">#</th>
            <th scope="col" id="no-border" class="table-results-name">Nick</th>
            <th scope="col" id="no-border" class="table-results-team">Zespół</th>
            <th scope="col" id="no-border" class="table-results-time">Czas</th>
            <th scope="col" id="no-border" class="table-results-besttime">Najlepsze okrążenie</th>
            <th scope="col" id="no-border" class="table-results-pitstops">Ilość postojów</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>45:00:00</td>
            <td>1:32:607</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>+5.567</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">4</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">5</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">6</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">7</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">8</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">9</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">10</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">11</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">12</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">13</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">14</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">15</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">16</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">17</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">18</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">19</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
            <tr>
            <th scope="row">20</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1:33:305</td>
            <td>1</td>
            </tr>
        </tbody>
        </table>
        <div class="results-tor">
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
    </div>
</div>
@endsection