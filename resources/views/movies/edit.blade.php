@extends('layouts.default')
@section('content')
    <div class="grey-banner">
        <div class="description-container">
            <h1>Movie Edit</h1>
            
        </div>
    </div>
    <div class="ssl-form-container">
        <form class="create-form text-left" method="POST" action="{{ route('movies.update', $movie->id) }}">
             {{ csrf_field() }}
                <div class="form-section">
                    <label for="title"><span class="text-h3">Title:<span class="req-asterisk">*</span></span>
                        <input name="title" class="input-form" type="text" id="title" value="{{$movie->title}}" required >
                    </label>
                </div>

                <div class="form-section">
                    <label for="year"><span class="text-h3">Release Year:<span class="req-asterisk">*</span></span>
                        <input name="year" class="input-form" " type="text" id="year" value="{{$movie->year}}" required >
                    </label>
                </div>

                <div class="form-section">
                    <label for="genre"><span class="text-h3">Genre:<span class="req-asterisk">*</span></span>
                        <input name="genre" class="input-form" type="text" id="genre" value="{{$movie->genre}}" required >
                    </label>
                </div>

                <div class="form-section">
                    <label for="media"><span class="text-h3">Media Type:<span class="req-asterisk">*</span></span>

                        <input name="media" class="input-form" type="text" id="media" value="{{$movie->media_type}}" required >
                    </label>
                </div>

                <div class="form-section">
                    <label for="owner"><span class="text-h3">Owner:<span class="req-asterisk">*</span></span>

                        <input name="owner" class="input-form" type="text" id="genre" value="{{$movie->owner}}" required >
                    </label>
                </div>

                <div class="bottom-btn-wrapper update-prof-btn form-btn-wrapper">
                    <button type="button" class="form-sub-btn" data-toggle="modal"
                        data-target="#confirmationModal">Update Profile</button>
                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" style="color:#000;" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h5 class="modal-title text-h3 red-text" id="modalLabel">Confirmation</h5>
                                <p>Make sure you have checked your changes.</p>
                                <p>Would you like submit this update?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary cancel-modal" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary modal-btn"
                                    formaction="{{ route('movies.update', $movie->id) }}">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop