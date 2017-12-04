@extends('layouts.concert')
@section('content')
    <div class="concert-pg-wrapper">
        <div class="page-header">
            <h2 class="text-center text-up">Concerts</h2>
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