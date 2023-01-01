@foreach ($messages['data'] as $message)
    <div class="item-list gray">
        <img src="{{ $message['image'] }}" />
        <div class="item-content">
            {{ $message['name'] }}
            <br />
            <span> <i class="fa fa-clock"></i> {{ $message['created_at'] }} </span>
            <span> <i class="fa fa-envelope"></i> {{ $message['email'] }} </span>
            <span> <i class="fa fa-phone"></i> {{ $message['phone'] }} </span>
            <span> <i class="fa fa-info"></i> {{ $message['role'] }} , {{ $message['school'] }} </span>
            <span> <i class="fa fa-map-marker"></i> {{ $message['region'] }} </span>
        </div>
        <button class="icon-btn red-bc delete-btn"
            data-url="{{ route('admin.requests.delete', ['id' => $message['id']]) }}">
            <i class="fa fa-trash"></i>
        </button>
    </div>
@endforeach
