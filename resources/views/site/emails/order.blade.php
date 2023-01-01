@component('mail::message')
    <h2>
        Hello </h2>
    <p> This is a new order request from {{ $details['name'] }} ,</p>
    <p>Email : <strong>{{ $details['email'] }}</strong></p>
    <p>Phone number : <strong>{{ $details['phone'] }}</strong></p>
    @component('mail::button', ['url' => $details['url']])
        Click here to see the order
    @endcomponent
    </p>

    Thanks,
    {{ config('app.name') }}
@endcomponent
