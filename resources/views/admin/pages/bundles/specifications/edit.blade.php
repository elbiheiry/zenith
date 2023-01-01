<form class="modal-content text-center ajax-form" method="put"
    action="{{ route('admin.bundles.accessories.update', ['id' => $specification['id']]) }}">
    @csrf
    @method('put')
    <div class="modal-body text-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label> Accessory</label>
                    <select class="form-control" name="accessory_id" id="accessory-input"
                        data-url="{{ route('admin.bundles.accessories.specifications') }}">
                        <option value="0">Choose </option>
                        @foreach ($accessories['data'] as $accessory)
                            <option value="{{ $accessory['id'] }}"
                                {{ $accessory['id'] == $specification['accessory_id'] ? 'selected' : '' }}>
                                {{ $accessory['name_en'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label> Accessory SKU</label>
                    <select class="form-control" name="accessory_specification_id" id="specification-area">
                        <option value="0">Choose </option>
                        @foreach ($specifications['data'] as $single)
                            <option value="{{ $single['id'] }}"
                                {{ $single['id'] == $specification['accessory_specification_id'] ? 'selected' : '' }}>
                                {{ $single['sku'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer text-center">
        <button class="custom-btn" type="submit">
            <i class="fa fa-plus"></i> Save change
        </button>
        <button type="button" class="custom-btn red-bc" data-dismiss="modal">
            <i class="fa fa-times"></i> Close
        </button>
    </div>
</form>
