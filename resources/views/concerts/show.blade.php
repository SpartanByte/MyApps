@extends('layouts.default')
@section('content')
    <div class="app-pg-wrapper">
        <div class="set-details">
            <div class="set-header">
                <h1>Set Details</h1>
            </div>
            <div class="concert-image-header">
                @if($bandSet != null)
                    <img src="/images/concerts/logos/{{$bandSet->band_name}}.jpg" width="500"/>
                    </div>
                    <h2>{{$bandSet->band_name}}</h2>
                    <h3>{{$bandSet->concert_date}}</h3>
                    <h3>{{$bandSet->venue}} in {{$bandSet->city_state}}</h3>
                @else
                    <img src="https://media.istockphoto.com/illustrations/live-concert-rubber-stamp-illustration-id679966150" width="500" />
                @endif
                    <div class="setlist-ul">
                        <ul>
                            <li>Song 1</li>
                            <li>Song 2</li>
                            <li>Song 3</li>
                            <li>Song 4</li>
                            <li>Song 5</li>
                        </ul>
                    </div>
                </div>
            </div>
        @stop