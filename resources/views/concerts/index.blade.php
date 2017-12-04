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
                @foreach($events as $event)
                    @foreach($event as $lineup)
                    <tr>
                        <td>{{$lineup->band_name}}</td>
                        <td>{{$lineup->concert_date}}</td>
                        <td>{{$lineup->venue}}</td>
                        <td>{{$lineup->city_state}}</td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
{{--         <ol>
        @foreach($events as $event)
            @foreach($event as $lineup)
            <li>{{$lineup->concert_date}}</li>
            <ul>
                <li>{{$lineup->band_name}}</li>
            </ul>
            @endforeach
        @endforeach
    </ol> --}}
    </div>
@stop