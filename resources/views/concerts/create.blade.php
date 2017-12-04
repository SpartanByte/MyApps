@extends('layouts.concert')
@section('content')
    <div class="app-pg-wrapper">
        <div class="pg-header">
            <h1>Add A Band Set</h1>
        </div>
        <form class="app-form" method="POST" action="{{ route('concerts.store') }}">
            {{ csrf_field() }}
            <div class="form-section">
                <label for="name"><span class="text-h2">Band:<span class="req-asterisk">*</span></span>
                    <input name="band" class="input-form" type="text" id="band" placeholder="Enter Band's Name: " required >
                </label>
            </div>
            <div class="form-section">
                <label for="email"><span class="text-h2">Date: (DD/MM/YYYY)<span class="req-asterisk">*</span></span>
                    <input name="date" class="input-form" type="text" id="date" placeholder="Enter Concert Date: " required >
                </label>
            </div>

            <div class="form-section">
                <label for="domain"><span class="text-h2">Venue:<span class="req-asterisk">*</span></span>
                    <input name="venue" class="input-form" type="text" id="venue" placeholder="Enter Venue" required>
                </label>
            </div>
            <div class="form-section">
                <label for="domain"><span class="text-h2">City/State:<span class="req-asterisk">*</span></span>
                    <input name="location" class="input-form" type="text" id="location" placeholder="Enter City and State" required>
                </label>
            </div>
            <div class="form-btn-group">
                <input type="submit" class="btn btn-small btn-success post-btn" value="Submit Post" />
            </div>
        </form>
    </div>
    <script src="{{ URL::asset('js/general.js') }}" /></script>
@stop