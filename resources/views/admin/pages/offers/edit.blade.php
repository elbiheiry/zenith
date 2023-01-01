<form class="modal-content text-center ajax-form" method="put"
    action="{{ route('admin.offers.update', ['id' => $offer['id']]) }}">
    @csrf
    @method('put')
    <div class="modal-body text-center">
        <div class="row">
            <div class="col-12">
                <img src="{{ $offer['image_path'] }}" width="150">
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Image </label>
                    <input type="file" class="jfilestyle" name="image" />
                </div>
                <span class="text-danger">Image dimensions should be : 128 * 128
                </span>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Title (EN)</label>
                    <input type="text" class="form-control" name="title_en" value="{{ $offer['title_en'] }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Title (AR)</label>
                    <input type="text" class="form-control" name="title_ar" value="{{ $offer['title_ar'] }}">
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
