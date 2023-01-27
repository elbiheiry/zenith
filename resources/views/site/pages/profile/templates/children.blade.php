<form class="modal-content text-center profile-form" method="put"
    action="{{ route('site.profile.child.update', ['id' => $child['id']]) }}">
    @csrf
    @method('put')
    <div class="modal-title">
        <h2>{{ locale() == 'en' ? 'Update child data' : 'تعديل بيانات الإبن' }}</h2>
    </div>
    <div class="modal-body text-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>{{ locale() == 'en' ? 'School code' : 'الكود المدرسي' }}</label>
                    <input type="text" class="form-control" name="code" value="{{ $child->code }}" />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>{{ locale() == 'en' ? 'Select School' : 'إختر المدرسة' }}</label>
                    <select class="form-control" name="school_id">
                        <option value="0" selected>
                            {{ locale() == 'en' ? 'Select School' : 'إختر المدرسة' }}</option>
                        @foreach ($schools['data'] as $school)
                            <option value="{{ $school['id'] }}"
                                {{ $school['id'] == $child->school_id ? 'selected' : '' }}>
                                {{ $school['name_' . locale()] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>{{ locale() == 'en' ? 'Student name' : 'إسم الطالب' }}</label>
                    <input type="text" class="form-control" name="name" value="{{ $child->name }}" />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>{{ locale() == 'en' ? 'Year grade' : 'السنة الدراسية' }}</label>
                    <input type="text" class="form-control" name="grade" value="{{ $child->grade }}" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer text-center">
        <button class="link" type="submit">
            <span>
                {{ locale() == 'en' ? 'Save Changes' : 'حفظ التغييرات' }} <i class="fa fa-long-arrow-alt-right"></i>
            </span>
        </button>
        <button type="button" class="link" style="background-color: #d50c0c;" data-dismiss="modal">
            <span>
                {{ locale() == 'en' ? 'Close' : 'إغلاق' }} <i class="fa fa-times"></i>
            </span>
        </button>
    </div>
</form>
