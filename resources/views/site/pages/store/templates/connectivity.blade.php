<label class="d-block"> {{ locale() == 'en' ? 'Connectivity' : 'التوصيل' }} </label>
@foreach ($connectivities as $index => $connectivity)
    <div class="check_list">
        <input type="radio" id="con{{ $index }}" name="connectivity" value="{{ $connectivity->connectivity }}"
            class="connectivity-input" />
        <label for="con{{ $index }}">
            <span> {{ $connectivity->connectivity }} </span>
        </label>
    </div>
@endforeach
