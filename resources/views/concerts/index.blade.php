@extends('layouts.concert')
@section('content')
    <div class="app-pg-wrapper">
        <div class="pg-header">
            <h1>Concerts</h1>
        </div>
        <table class="concert-table">
            <thead>
                <tr>
                    <th>Band</th>
                    <th>Date</th>
                    <th>Venue</th>
                    <th>Location</th>
                    <th class="text-center">Setlist</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{$event->band_name}}</td>
                        <td>{{$event->concert_date}}</td>
                        <td>{{$event->venue}}</td>
                        <td>{{$event->city_state}}</td>
                        <td class="btn-standard setlist text-center"><a href="concerts/{{$event->id}}">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@stop