@extends('layouts.movie')
@section('content')
    <div class="app-pg-wrapper">
        <div class="pg-header">
            <h1>Add A Movie</h1>
        </div>
        <form class="app-form" method="POST" action="{{ route('movies.store') }}">
            {{ csrf_field() }}
            <div class="form-section">
                <label for="name"><span class="text-h2">Title: <span class="req-asterisk">*</span></span>
                    <input name="title" class="input-form" type="text" id="title" placeholder="Enter A Movie Title: " required >
                </label>
            </div>
            <div class="form-section">
                <label for="email"><span class="text-h2">Release Year: (YYYY)<span class="req-asterisk">*</span></span>
                    <input name="year" class="input-form" type="text" id="year" placeholder="Enter The Release Year: " required >
                </label>
            </div>

            <div class="form-section">
                <label for="domain"><span class="text-h2">Genre:<span class="req-asterisk">*</span></span>
                    <input name="genre" class="input-form" type="text" id="genre" placeholder="Enter Genre" required>
                </label>
            </div>
            <div class="form-section">
                <label for="domain"><span class="text-h2">Media Type(s) Owned On:<span class="req-asterisk">*</span></span>
                    <input name="media" class="input-form" type="text" id="media" placeholder="Enter Media Types" required>
                </label>
            </div>
            <div class="form-section">
                <label for="owner"><span class="text-h2">Owner:<span class="req-asterisk">*</span></span>
                    <input name="owner" class="input-form" type="text" id="owner" placeholder="Enter Owner (if it matters)" required >
                </label>
            <div class="form-btn-group">
                <input type="submit" class="btn btn-small btn-success post-btn" value="Add Movie" />
            </div>
        </form>
    </div>
    <script src="{{ URL::asset('js/general.js') }}" /></script>
@stop