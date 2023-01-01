<option value="0">Choose</option>
@foreach ($specifications['data'] as $specification)
    <option value="{{ $specification['id'] }}">{{ $specification['sku'] }}</option>
@endforeach
