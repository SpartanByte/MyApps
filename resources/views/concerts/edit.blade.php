@extends('layouts.default')
@section('content')
    <div class="grey-banner">
        <div class="description-container">
            <h1>Profile Edit</h1>
            <p class="text-h2 text-up">Editing &#9656; {{$user->name}}</p>
            <p><em><strong>Note</strong></em>: this form is for editing domain contact information and settings for {{$user->name}} on domain: {{$user->domain}}.</p>
            <p><span class="req-asterisk">*</span>All fields are required and must be filled in if current value is removed.</p>
        </div>
    </div>
    <div class="ssl-form-container">
        <form class="create-form text-left" method="POST" action="{{ route('profile.update', $user->id) }}">
             {{ csrf_field() }}
                <div class="form-section">
                    <label for="name"><span class="text-h3">Name:<span class="req-asterisk">*</span></span>
                        <p class="instructions">First and Last Name</p>
                        <input name="name" class="input-form" type="text" id="name" value="{{$user->name}}" required >
                    </label>
                </div>

                <div class="form-section">
                    <label for="email"><span class="text-h3">Email Address:<span class="req-asterisk">*</span></span>
                        <p class="instructions">Note: This email address is where email notifications will be sent to.</p>
                        <input name="email" class="input-form" " type="email" id="email" value="{{$user->email}}" required >
                    </label>
                </div>

                <div class="form-section">
                    <label for="domain"><span class="text-h3">Associated Domain:<span class="req-asterisk">*</span></span>
                        <p class="instructions">Users can be associated with multiple domains, each domain profile can be edited individually.</p>
                        <input name="domain" class="input-form" type="text" id="domain" value="{{$user->domain}}" required >
                    </label>
                </div>

                <div class="form-section">
                    <div class="settings-checkoption">
                        <p class="text-h2 text-bold">Notification Settings:</p>
                        <label for="reminder-opt">
                            @if($user->reminders_on == 1)
                                <input class="remind-input" name="reminders" type="checkbox"
                                    id="reminder-checkbox" onclick="addReminder()" checked="checked" value="1" />
                                <span class="reminder-label">Receive 30 Day Reminder Emails</span>
                                <div id="add-rem-confirm" class="form-control">
                                    <span class="red-checkmark">&#10004;</span>
                                    <span class="option-toggle">Option for 30 Day SSL Certificate reminder emails is selected</span>
                                </div>
                            @else
                                <input class="remind-input" name="reminders" type="checkbox"
                                    id="reminder-checkbox" onclick="addReminder()" value="1" />
                                <span class="reminder-label">Receive 30 Day Reminder Emails</span>
                            @endif
                                <div id="add-rem-confirm" class="form-control" style="display:none;">
                                    <span class="red-checkmark">&#10004;</span>
                                    <span class="option-toggle">Option for 30 Day SSL Certificate reminder emails is selected</span>
                                </div>
                        </label><br />
                        <label for="expired-opt">
                            @if($user->expirations_on == 1)
                                <input class="expire-input" name="expirations" type="checkbox"
                                    id="expired-checkbox" onclick="addExpiration()" checked="checked" value="1" />
                                <span class="expiration-label" id="loaded-rem-checked">Receive SSL Certificate Expiration Emails:</span>
                                <div id="add-exp-confirm" class="form-control">
                                    <span class="red-checkmark">&#10004;</span>
                                    <span class="option-toggle">Option for SSL Certificate expiration emails is selected</span>
                                </div>
                            @else
                                <input class="expire-input" name="expirations" type="checkbox" id="expired-checkbox" onclick="addExpiration()" value="1" />
                                <span class="expiration-label" id="loaded-exp-checked">Receive SSL Certificate Expiration Emails:</span>
                            @endif
                            <div id="add-exp-confirm" class="form-control" style="display:none;">
                                <span class="red-checkmark">&#10004;</span>
                                <span class="option-toggle">Option for SSL Certificate expiration emails is selected</span>
                            </div>
                        </label>
                    </div>
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
                                    formaction="{{ route('profile.update', $user->id) }}">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop