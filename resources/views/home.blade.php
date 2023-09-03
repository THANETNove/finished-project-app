@extends('layouts.app_2')

@section('content')
    <div class="container-fluid">


        {{ $data }}
        @if ($data->count() < 1)
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{ url('/create-performance') }}">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">เพิ่มโปรเจคจบ</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-plus fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('/create-performance') }}">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">เพิ่มโปรเจคจบ</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-plus fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        @if ($data->count() > 0)
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        {{--  <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>ชื่อ-นามสกุล:</td>
                                        <td>
                                            <span class="span-l">{{ $data->std_fristename }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>รหัสนักศึกษา:</td>
                                        <td><span class="span-l">{{ $user->std_id }}</span></td>
                                    </tr>
                                    <tr>
                                        <td>สาขาวิชา:</td>
                                        <td><span class="span-l">{{ $user->std_major }}</span></td>
                                    </tr>
                                    <tr>
                                        <td>ประเภทวิชา:</td>
                                        <td><span class="span-l">{{ $user->std_typesubject }}</span></td>
                                    </tr>
                                    <tr>
                                        <td>ปีการศึกษา:</td>
                                        <td><span class="span-l">{{ $user->std_year }}</span></td>
                                    </tr>
                                    <tr>
                                        <td>วิทยาลัย:</td>
                                        <td><span class="span-l">{{ $user->college }}</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{ url('/edit-profile', $user->id) }}" class="btn btn-primary">
                                แก้ไข
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        @endif





    </div>
@endsection
