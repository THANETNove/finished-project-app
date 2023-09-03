@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-12">
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ผลงานนักศึกษา</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        @if ($data->count() > 0)
                            @foreach ($data as $data_user)
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100">
                                        <a href="{{ url('/welcome-view', $data_user->id) }}">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <img class="image-performance"
                                                        src="{{ URL::asset('/assets/img/image_performance/' . $data_user->image) }}"
                                                        alt="...">
                                                    <div>
                                                        <h4 class="data-label">ชื่อโครงการ:</h4>
                                                        <div class="data-value">{{ $data_user->project_name }}</div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <h5 class="data-label">บทคัดย่อ:</h5>
                                                        <div class="data-value">
                                                            {{ substr(preg_replace('/[^\p{L}\p{N}\s]/u', '', $data_user->project_into), 0, 400) }}...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection
