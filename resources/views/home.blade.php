@extends('layouts.app_2')

@section('content')
    <div class="container-fluid">

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


        @if ($data->count() > 0)
            <div class="row">
                <div class="col-xl-12 col-lg-12">

                    <div class="card">
                        <a class="edit-performance" href="{{ url('/edit-performance', $data[0]->id) }}">เเก้ไข</a>
                        <div class="data-grid">
                            {{-- <div class="data-row">
                                <div class="data-label">รูปภาพ:</div>
                                <div class="data-value">
                                    <img src="{{ URL::asset('/assets/img/image_performance/' . $data[0]->image) }}"
                                        alt="...">
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="data-label col-sm-12 col-md-3">รูปภาพ:</div>
                                <div class="data-value col-sm-12 col-md-9">
                                    <img src="{{ URL::asset('/assets/img/image_performance/' . $data[0]->image) }}"
                                        class="performance-image" alt="...">
                                </div>
                            </div>
                            <br>
                            <div class="data-row">
                                <div class="data-label">ระดับชั้น:</div>
                                <div class="data-value">{{ $data[0]->class_name }}</div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">สาขาวิชา:</div>
                                <div class="data-value">{{ $data[0]->major_name }}</div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">ประเภทวิชา:</div>
                                <div class="data-value">{{ $data[0]->std_typesubject }}</div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">ภาคเรียน:</div>
                                <div class="data-value">{{ $data[0]->term_name }}</div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">ปีการศึกษา:</div>
                                <div class="data-value">{{ $data[0]->std_year }}</div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">ชื่อโครงการ:</div>
                                <div class="data-value">{{ $data[0]->project_name }}</div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">คำสำคัญ:</div>
                                <div class="data-value">{{ $data[0]->keyword_name }}</div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">บทคัดย่อ:</div>
                                <div class="data-value">{{ $data[0]->project_into }}</div>
                            </div>
                            <br>
                            <div class="data-row">
                                <div class="data-label">บทที่1:</div>
                                <div class="data-value">
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit1) }}"
                                        target="_blank">ดูไฟล์
                                        PDF</a>&nbsp; &nbsp;&nbsp;
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit1) }}" target="_blank"
                                        download>ดาวน์โหลดไฟล์ PDF</a>
                                </div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">บทที่2:</div>
                                <div class="data-value">
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit2) }}"
                                        target="_blank">ดูไฟล์
                                        PDF</a>&nbsp; &nbsp;&nbsp;
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit2) }}" target="_blank"
                                        download>ดาวน์โหลดไฟล์ PDF</a>
                                </div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">บทที่3:</div>
                                <div class="data-value">
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit3) }}"
                                        target="_blank">ดูไฟล์
                                        PDF</a>&nbsp; &nbsp;&nbsp;
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit3) }}" target="_blank"
                                        download>ดาวน์โหลดไฟล์ PDF</a>
                                </div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">บทที่4:</div>
                                <div class="data-value">
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit4) }}"
                                        target="_blank">ดูไฟล์
                                        PDF</a>&nbsp; &nbsp;&nbsp;
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit4) }}" target="_blank"
                                        download>ดาวน์โหลดไฟล์ PDF</a>
                                </div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">บทที่5:</div>
                                <div class="data-value">
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit5) }}"
                                        target="_blank">ดูไฟล์
                                        PDF</a>&nbsp; &nbsp;&nbsp;
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit5) }}" target="_blank"
                                        download>ดาวน์โหลดไฟล์ PDF</a>
                                </div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">บทที่6:</div>
                                <div class="data-value">
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit6) }}"
                                        target="_blank">ดูไฟล์
                                        PDF</a>&nbsp; &nbsp;&nbsp;
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->unit6) }}" target="_blank"
                                        download>ดาวน์โหลดไฟล์ PDF</a>
                                </div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">ทั้งเล่ม:</div>
                                <div class="data-value">
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->project_all) }}"
                                        target="_blank">ดูไฟล์
                                        PDF</a>&nbsp; &nbsp;&nbsp;
                                    <a href="{{ URL::asset('/assets/img/file_pdf/' . $data[0]->project_all) }}"
                                        target="_blank" download>ดาวน์โหลดไฟล์ PDF</a>
                                </div>
                            </div>
                            <div class="data-row">
                                <div class="data-label">ผู้จัดทำที่ 1:</div>
                                <div class="data-value">{{ $data[0]->person_name_1 }}</div>
                            </div>
                            @if (!empty($data[0]->person_name_1))
                                <div class="data-row">
                                    <div class="data-label">ผู้จัดทำที่ 1:</div>
                                    <div class="data-value">{{ $data[0]->person_name_1 }}</div>
                                </div>
                            @endif
                            @if (!empty($data[0]->person_name_2))
                                <div class="data-row">
                                    <div class="data-label">ผู้จัดทำที่ 2:</div>
                                    <div class="data-value">{{ $data[0]->person_name_2 }}</div>
                                </div>
                            @endif
                            @if (!empty($data[0]->person_name_3))
                                <div class="data-row">
                                    <div class="data-label">ผู้จัดทำที่ 3:</div>
                                    <div class="data-value">{{ $data[0]->person_name_3 }}</div>
                                </div>
                            @endif
                            @if (!empty($data[0]->person_name_4))
                                <div class="data-row">
                                    <div class="data-label">ผู้จัดทำที่ 4:</div>
                                    <div class="data-value">{{ $data[0]->person_name_4 }}</div>
                                </div>
                            @endif
                            @if (!empty($data[0]->person_name_5))
                                <div class="data-row">
                                    <div class="data-label">ผู้จัดทำที่ 5:</div>
                                    <div class="data-value">{{ $data[0]->person_name_5 }}</div>
                                </div>
                            @endif
                            @if (!empty($data[0]->person_name_6))
                                <div class="data-row">
                                    <div class="data-label">ผู้จัดทำที่ 6:</div>
                                    <div class="data-value">{{ $data[0]->person_name_6 }}</div>
                                </div>
                            @endif
                            @if (!empty($data[0]->person_name_7))
                                <div class="data-row">
                                    <div class="data-label">ผู้จัดทำที่ 7:</div>
                                    <div class="data-value">{{ $data[0]->person_name_7 }}</div>
                                </div>
                            @endif
                            @if (!empty($data[0]->person_name_8))
                                <div class="data-row">
                                    <div class="data-label">ผู้จัดทำที่ 8:</div>
                                    <div class="data-value">{{ $data[0]->person_name_8 }}</div>
                                </div>
                            @endif
                        </div>

                        {{--  <div class="card-footer text-right">
                            <a href="{{ url('/edit-profile', $data->id) }}" class="btn btn-primary">
                                แก้ไข
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        @endif





    </div>
@endsection
