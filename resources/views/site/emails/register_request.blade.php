@component('mail::message')
    <h2>Hello </h2>
    <p> This is a school registeration request from {{ $details['name'] }} ,</p>
    <p>Email : <strong>{{ $details['email'] }}</strong></p>
    <p>Phone number : <strong>{{ $details['phone'] }}</strong></p>
    <p>Role : <strong>{{ $details['role'] }}</strong></p>
    <p>School name : <strong>{{ $details['school'] }}</strong></p>
    <p>Region : <strong>{{ $details['region'] }}</strong></p>

    Thanks,
    {{ config('app.name') }}
@endcomponent
