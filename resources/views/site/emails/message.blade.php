@component('mail::message')
    <h2>Hello </h2>
    <p> This is a contact us message from {{ $details['name'] }} about {{ $details['subject'] }} ,</p>
    <p>Email : <strong>{{ $details['email'] }}</strong></p>
    <p>Phone number : <strong>{{ $details['phone'] }}</strong></p>
    <p>Message : <strong>{{ $details['message'] }}</strong></p>

    Thanks,
    {{ config('app.name') }}
@endcomponent
