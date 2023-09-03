@extends('layouts.app_2')

@section('content')
    <div class="card o-hidden border-0">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">เเก้ไขข้อมูลนักศึกษา</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('update-profile', $user->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <label for="std_fristename"
                                                class="col-md-4 col-form-label text-md-end">{{ __('ชื่อ') }}</label>
                                            <div class="col-md-6">
                                                <input id="std_fristename" type="text"
                                                    class="form-control @error('std_fristename') is-invalid @enderror"
                                                    name="std_fristename" value="{{ $user->std_fristename }}"
                                                    autocomplete="std_fristename">
                                                @error('std_fristename')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="std_lastna"
                                                class="col-md-4 col-form-label text-md-end">{{ __('นามสกุล') }}</label>
                                            <div class="col-md-6">
                                                <input id="std_lastna" type="text"
                                                    class="form-control @error('std_lastna') is-invalid @enderror"
                                                    name="std_lastna" value="{{ $user->std_lastna }}" required
                                                    autocomplete="std_lastna">

                                                @error('std_lastna')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="std_major"
                                                class="col-md-4 col-form-label text-md-end">{{ __('สาขาวิชา') }}</label>
                                            <div class="col-md-6">
                                                <input id="std_major" type="text"
                                                    class="form-control @error('std_major') is-invalid @enderror"
                                                    name="std_major" required value="{{ $user->std_major }}"
                                                    autocomplete="std_major">

                                                @error('std_major')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="std_typesubject"
                                                class="col-md-4 col-form-label text-md-end">{{ __('ประเภทวิชา') }}</label>
                                            <div class="col-md-6">
                                                <input id="std_typesubject" type="text"
                                                    class="form-control @error('std_typesubject') is-invalid @enderror"
                                                    name="std_typesubject" required value="{{ $user->std_typesubject }}"
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
                                                class="col-md-4 col-form-label text-md-end">{{ __('ปีการศึกษา') }}</label>
                                            <div class="col-md-6">
                                                <input id="std_year" type="text"
                                                    class="form-control @error('std_year') is-invalid @enderror"
                                                    name="std_year" required value="{{ $user->std_year }}"
                                                    autocomplete="std_year">

                                                @error('std_year')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="college"
                                                class="col-md-4 col-form-label text-md-end">{{ __('วิทยาลัย') }}</label>
                                            <div class="col-md-6">
                                                <input id="college" type="text"
                                                    class="form-control @error('college') is-invalid @enderror"
                                                    name="college" required value="{{ $user->college }}"
                                                    autocomplete="college">

                                                @error('college')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
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
        </div>
    </div>
@endsection
{{-- --}}
