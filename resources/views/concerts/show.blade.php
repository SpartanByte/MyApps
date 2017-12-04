@extends('layouts.default')
@section('content')
    <div class="grey-banner">
        <div class="description-container">
            @if(isset($user->name))
                <h2 class="text-h1">Domain Profile &#9656; {{$user->name }}</h2>
                <p class="text-h2">Name: {{$user->name}}<br />
                    Email: {{$user->email}} <br />
                    Associated Domain: {{$user->domain}}
                </p>
        </div>
    </div>
     <table class="cert-table width-90" style="margin-top:1%;">
            <thead class="cert-head">
                <th>Notification Option</th>
                <th>On/Off</th>
            </thead>
            <tbody>
                <tr>
                    <td>Reminder Emails</td>
                    <td>
                        @if($user->reminders_on == 1)
                            <span class="prof-chkmark">&#10003;</span>
                        @else
                            <span class="prof-alert-off">Off</span>
                        @endif
                    </td>
                </tr>
                <tr><td>Expiration Emails</td>
                    <td>
                        @if($user->expirations_on == 1)
                            <span class="prof-chkmark">&#10003;</span>
                        @else
                            <span class="prof-alert-off">Off</span>
                        @endif
                    </td>
                    @else
                       <div class="nothing-found">
                            <p><span class="emoji">&#9785;</span><br />
                            No domain contacts could be found.</p>
                            <p><a href="/admin/create">Add a Domain Contact</a></p>
                        </div>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>
@stop