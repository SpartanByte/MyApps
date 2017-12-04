@extends('layouts.concert')
@section('content')
    <div class="app-pg-wrapper">
        <div class="pg-header">
            <h1>Concerts (Ordered By Band)</h1>
        </div>
        <table class="concert-table">
            <thead>
                <tr>
                    <th>Band</th>
                    <th>Date</th>
                    <th>Venue</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bands as $band)
                    @foreach($band as $set)
                        <tr>
                            <td>{{$set->band_name}}</td>
                            <td>{{$set->concert_date}}</td>
                            <td>{{$set->venue}}</td>
                            <td>{{$set->city_state}}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
@stop