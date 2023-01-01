<form class="modal-content text-center ajax-form" method="put"
    action="{{ route('admin.accessories.specifications.update', ['id' => $specification['id']]) }}">
    @csrf
    @method('put')
    <div class="modal-body text-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>SKU</label>
                    <input class="form-control" name="sku" type="text" value="{{ $specification['sku'] }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" name="price" type="number" step="0.01" min="0"
                        value="{{ $specification['price'] }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Color</label>
                    <select class="form-control" name="color_id">
                        <option value="0">Choose</option>
                        @foreach ($colors['data'] as $color)
                            <option value="{{ $color['id'] }}"
                                {{ $color['id'] == $specification['color_id'] ? 'selected' : '' }}>
                                {{ $color['name_en'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Locale</label>
                    <input class="form-control" name="locale" type="text" value="{{ $specification['locale'] }}">
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
