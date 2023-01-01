<form class="modal-content text-center ajax-form" method="put"
    action="{{ route('admin.sliders.update', ['slider' => $slider['id']]) }}">
    @csrf
    @method('put')
    <div class="modal-body text-center">
        <div class="row">
            <div class="col-12">
                <img src="{{ $slider['image_path'] }}" width="150">
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Image </label>
                    <input type="file" class="jfilestyle" name="image" />
                </div>
                <span class="text-danger">Image dimensions should be : 1920 * 960
                </span>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Button link</label>
                    <input type="text" class="form-control" name="link" value="{{ $slider['link'] }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Title (EN)</label>
                    <input type="text" class="form-control" name="title_en" value="{{ $slider['title_en'] }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Title (AR)</label>
                    <input type="text" class="form-control" name="title_ar" value="{{ $slider['title_ar'] }}">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label>Description (EN)</label>
                    <input class="form-control" type="text" name="description_en"
                        value="{{ $slider['description_en'] }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Description (AR)</label>
                    <input class="form-control" type="text" name="description_ar"
                        value="{{ $slider['description_ar'] }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Button title (EN)</label>
                    <input type="text" class="form-control" name="button_en" value="{{ $slider['button_en'] }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Button title (AR)</label>
                    <input type="text" class="form-control" name="button_ar" value="{{ $slider['button_ar'] }}">
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
