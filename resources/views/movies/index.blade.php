@extends('layouts.movie')
@section('content')
    <div class="app-pg-wrapper">
        <div class="pg-header">
            <h1>Movies</h1>
        </div>
        <table class="concert-table">
            <thead>
                <tr>
                    <th>Movie Title</th>
                    <th>Release Year</th>
                    <th>Genre</th>
                    <th>Type of Media</th>
                    <th>Owner</th>
                    <td>Edit</td>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                    <tr>
                        <td>{{$movie->title}}</td>
                        <td>{{$movie->year}}</td>
                        <td>{{$movie->genre}}</td>
                        <td>{{$movie->media_type}}</td>
                        <td>{{$movie->owner}}</td>
                        <td><a href="{{route('movies.edit', $movie->id)}}">Edit</a></td>
                    </tr>
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