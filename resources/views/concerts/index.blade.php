@extends('layouts.concert')
@section('content')
    <div class="concert-pg-wrapper center-block">
        <div class="page-header">
            <h2 class="text-center text-up">Concerts</h2>
        </div>
        <table class="concert-table center-block">
            <thead>
                <th>Band</th>
                <th>Date</th>
                <th>Venue</th>
                <th>Location</th>
            </thead>
            <tbody>
                @foreach($concerts as $concert)
                    <td>{{$concert->band_name}}</td>
                    <td>{{$concert->concert_date}}</td>
                    <td>{{$concert->venue}}</td>
                    <td>{{$concert->city_state}}</td>
                @endforeach
            </tbody>
        </table>
    </div>
@stop