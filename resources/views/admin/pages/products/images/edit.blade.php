<form class="modal-content text-center ajax-form" method="put"
    action="{{ route('admin.products.images.update', ['id' => $image['id']]) }}">
    @csrf
    @method('put')
    <div class="modal-body text-center">
        <div class="row">
            <div class="col-12">
                <img src="{{ $image['image_path'] }}" width="150">
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Image </label>
                    <input type="file" class="jfilestyle" name="image" />
                </div>
                <span class="text-danger">Image dimensions should be : 540 * 540
                </span>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Color</label>
                    <select class="form-control" name="color_id">
                        <option value="0">Choose color</option>
                        @foreach ($colors['data'] as $color)
                            <option value="{{ $color['id'] }}"
                                {{ $image['color_id'] == $color['id'] ? 'selected' : '' }}>{{ $color['name_en'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Locale</label>
                    <select class="form-control" name="locale">
                        <option value="0">Choose locale</option>
                        <option value="en" {{ $image['locale'] == 'en' ? 'selected' : '' }}>EN</option>
                        <option value="ar" {{ $image['locale'] == 'ar' ? 'selected' : '' }}>AR</option>
                        <option value="general" {{ $image['locale'] == 'general' ? 'selected' : '' }}>General</option>
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
