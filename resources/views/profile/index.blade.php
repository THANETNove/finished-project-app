@extends('layouts.app_2')

@section('content')
    <div class="card o-hidden border-0">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">ข้อมูลนักศึกษา</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>ชื่อ-นามสกุล:</td>
                                                <td>
                                                    <span class="span-l">{{ $user->std_fristename }}</span>
                                                    <span class="span-l">{{ $user->std_lastna }}</span>
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
                                    <a href="#" class="btn btn-primary">
                                        แก้ไข
                                    </a>
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
