@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 mt-5">

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
                                    <input id="password" type="password"
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
