@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="std_id"
                                    class="col-md-4 col-form-label text-md-end">{{ __('รหัสนักศึกษา') }}</label>

                                <div class="col-md-6">
                                    <input id="std_id" type="text"
                                        class="form-control @error('std_id') is-invalid @enderror" name="std_id"
                                        value="{{ old('std_id') }}" required autocomplete="name" autofocus>

                                    @error('std_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('เลขบัตรประชาชน') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="text"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        value="{{ old('password') }}" required autocomplete="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="std_fristename"
                                    class="col-md-4 col-form-label text-md-end">{{ __('ชื่อ') }}</label>
                                <div class="col-md-6">
                                    <input id="std_fristename" type="text"
                                        class="form-control @error('std_fristename') is-invalid @enderror"
                                        name="std_fristename" required autocomplete="std_fristename">
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
                                        class="form-control @error('std_lastna') is-invalid @enderror" name="std_lastna"
                                        required autocomplete="std_lastna">

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
                                        class="form-control @error('std_major') is-invalid @enderror" name="std_major"
                                        required autocomplete="std_major">

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
                                        name="std_typesubject" required autocomplete="std_typesubject">

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
                                        class="form-control @error('std_year') is-invalid @enderror" name="std_year"
                                        required autocomplete="std_year">

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
                                        class="form-control @error('college') is-invalid @enderror" name="college" required
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
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
