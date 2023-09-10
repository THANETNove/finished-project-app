@extends('layouts.app_2')

@section('content')
    <div class="card o-hidden border-0">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">เเก้ไขผลงาน</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <form method="POST" action="{{ route('update-performance', $data->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <img id="selected-image" class="selected-mage"
                                    src="{{ URL::asset('/assets/img/image_performance/' . $data->image) }}">
                                <div class="row mb-3">
                                    <label for="std_id"
                                        class="col-md-2 col-form-label text-md-end">{{ __('รูปภาพ') }}</label>

                                    <div class="col-md-10">
                                        <input id="image" type="file"
                                            class="form-control @error('image') is-invalid @enderror" name="image"
                                            value="{{ old('image') }}" autocomplete="image" autofocus>

                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label for="std_class"
                                        class="col-md-2 col-form-label text-md-end">{{ __('ระดับชั้น') }}</label>

                                    <div class="col-md-10">
                                        <input id="std_class" type=""
                                            class="form-control @error('std_class') is-invalid @enderror" name="std_class"
                                            value="{{ $data->std_class }}" autocomplete="std_class">

                                        @error('std_class')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="std_major"
                                        class="col-md-2 col-form-label text-md-end">{{ __('สาขาวิชา') }}</label>
                                    <div class="col-md-10">
                                        <input id="std_major" type="text"
                                            class="form-control @error('std_major') is-invalid @enderror" name="std_major"
                                            value="{{ $data->std_major }}" autocomplete="std_major">

                                        @error('std_major')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="std_typesubject"
                                        class="col-md-2 col-form-label text-md-end">{{ __('ประเภทวิชา') }}</label>
                                    <div class="col-md-10">
                                        <input id="std_typesubject" type="text"
                                            class="form-control @error('std_typesubject') is-invalid @enderror"
                                            name="std_typesubject" value="{{ $data->std_typesubject }}"
                                            autocomplete="std_typesubject">

                                        @error('std_typesubject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="std_year"
                                        class="col-md-2 col-form-label text-md-end">{{ __('ปีการศึกษา') }}</label>
                                    <div class="col-md-10">
                                        <input id="std_year" type="text"
                                            class="form-control @error('std_year') is-invalid @enderror" name="std_year"
                                            value="{{ $data->std_year }}" autocomplete="std_year">

                                        @error('std_year')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="project_name"
                                        class="col-md-2 col-form-label text-md-end">{{ __('ชื่อโครงการ') }}</label>
                                    <div class="col-md-10">
                                        <input id="project_name" type="text" value="{{ $data->project_name }}"
                                            class="form-control @error('project_name') is-invalid @enderror"
                                            name="project_name" autocomplete="project_name">
                                        @error('project_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="project_into"
                                        class="col-md-2 col-form-label text-md-end">{{ __('บทคัดย่อ') }}</label>
                                    <div class="col-md-10">

                                        <textarea class="form-control @error('project_into') is-invalid @enderror" name="project_into"
                                            autocomplete="project_into" rows="3"> {{ $data->project_into }}</textarea>


                                        @error('project_into')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="unit1"
                                        class="col-md-2 col-form-label text-md-end">{{ __('บทที่1') }}</label>
                                    <div class="col-md-10">
                                        <input id="unit1" type="file"
                                            class="form-control @error('unit1') is-invalid @enderror" name="unit1"
                                            autocomplete="unit1">

                                        @error('unit1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="std_typesubject"
                                        class="col-md-2 col-form-label text-md-end">{{ __('บทที่2') }}</label>
                                    <div class="col-md-10">
                                        <input id="unit2" type="file"
                                            class="form-control @error('unit2') is-invalid @enderror" name="unit2"
                                            autocomplete="unit2">

                                        @error('unit2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="unit3"
                                        class="col-md-2 col-form-label text-md-end">{{ __('บทที่2') }}</label>
                                    <div class="col-md-10">
                                        <input id="unit3" type="file"
                                            class="form-control @error('unit3') is-invalid @enderror" name="unit3"
                                            autocomplete="unit3">

                                        @error('unit3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="unit4"
                                        class="col-md-2 col-form-label text-md-end">{{ __('บทที่4') }}</label>
                                    <div class="col-md-10">
                                        <input id="unit4" type="file"
                                            class="form-control @error('unit4') is-invalid @enderror" name="unit4"
                                            autocomplete="unit4">

                                        @error('unit4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="unit5"
                                        class="col-md-2 col-form-label text-md-end">{{ __('บทที่5') }}</label>
                                    <div class="col-md-10">
                                        <input id="unit5" type="file"
                                            class="form-control @error('unit5') is-invalid @enderror" name="unit5"
                                            autocomplete="unit5">

                                        @error('unit5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="unit6"
                                        class="col-md-2 col-form-label text-md-end">{{ __('บทที่6') }}</label>
                                    <div class="col-md-10">
                                        <input id="unit6" type="file"
                                            class="form-control @error('unit6') is-invalid @enderror" name="unit6"
                                            autocomplete="unit6">

                                        @error('unit6')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="project_all"
                                        class="col-md-2 col-form-label text-md-end">{{ __('ทั้งเล่ม') }}</label>
                                    <div class="col-md-10">
                                        <input id="project_all" type="file"
                                            class="form-control @error('project_all') is-invalid @enderror"
                                            name="project_all" autocomplete="project_all">

                                        @error('project_all')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-0">
                                    <div class="col-md-10 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            บันทึก
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // เมื่อมีการเลือกไฟล์
        document.getElementById('image').addEventListener('change', function() {
            // เรียกฟังก์ชันเมื่อมีการเลือกไฟล์
            displaySelectedImage(this);
        });

        function displaySelectedImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // กำหนดรูปภาพที่แสดงในแท็ก <img>
                    document.getElementById('selected-image').src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
{{-- --}}
