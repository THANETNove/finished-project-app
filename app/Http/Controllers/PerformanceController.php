<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Performance;


class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*  $data_performances = DB::table('performances')
            ->where('id_user', Auth::user()->id)
            ->get();
        return view('home', compact('data_performances')); */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_class = DB::table('class_type')
            ->get();
        $data_major = DB::table('major_type')
            ->get();
        $data_term = DB::table('term_type')
            ->get();
        return view('performance.create', ["data_class" => $data_class, "data_major" => $data_major, "data_term" => $data_term]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,webp'],
            'std_class' => ['required', 'string', 'max:255'],
            'std_major' => ['required', 'string', 'max:255'],
            'std_typesubject' => ['required', 'string', 'max:255'],
            'term' => ['required', 'string', 'max:255'],
            'std_year' => ['required', 'string', 'max:255'],
            'project_name' => ['required', 'string', 'max:255'],
            'keyword_name' => ['required', 'string', 'max:255'],
            'project_into' => ['required', 'string', 'max:255'],
            'unit1' => ['required', 'file', 'mimes:pdf'],
            'unit2' => ['required', 'file', 'mimes:pdf'],
            'unit3' => ['required', 'file', 'mimes:pdf'],
            'unit4' => ['required', 'file', 'mimes:pdf'],
            'unit5' => ['required', 'file', 'mimes:pdf'],
            'unit6' => ['required', 'file', 'mimes:pdf'],
            'project_all' => ['required', 'file', 'mimes:pdf'],
            'person_name_1' => ['required', 'string', 'max:255'],
        ]);

        $dateText = Str::random(6);
        // image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data =   $image->move(public_path() . '/assets/img/image_performance', Auth::user()->std_id .  "-unit5-" . $dateText . $image->getClientOriginalName());
            $imageName = Auth::user()->std_id .  "-unit5-" . $dateText . $image->getClientOriginalName();
        }

        // pdf บทที่ 1
        if ($request->hasFile('unit1')) {
            $image = $request->file('unit1');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit1-" . $dateText . $image->getClientOriginalName());
            $unit1_name = Auth::user()->std_id .  "-unit1-" . $dateText . $image->getClientOriginalName();
        }
        // pdf บทที่ 2
        if ($request->hasFile('unit2')) {
            $image = $request->file('unit2');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit2-" . $dateText . $image->getClientOriginalName());
            $unit2_name = Auth::user()->std_id .  "-unit2-" . $dateText . $image->getClientOriginalName();
        }
        // pdf บทที่ 3
        if ($request->hasFile('unit3')) {
            $image = $request->file('unit3');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit3-" . $dateText . $image->getClientOriginalName());
            $unit3_name = Auth::user()->std_id .  "-unit3-" . $dateText . $image->getClientOriginalName();
        }
        // pdf บทที่ 4
        if ($request->hasFile('unit4')) {
            $image = $request->file('unit4');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit4-" . $dateText . $image->getClientOriginalName());
            $unit4_name = Auth::user()->std_id .  "-unit4-" . $dateText . $image->getClientOriginalName();
        }

        // pdf บทที่ 5
        if ($request->hasFile('unit5')) {
            $image = $request->file('unit5');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit5-" . $dateText . $image->getClientOriginalName());
            $unit5_name = Auth::user()->std_id .  "-unit5-" . $dateText . $image->getClientOriginalName();
        }
        // pdf บทที่ 6
        if ($request->hasFile('unit6')) {
            $image = $request->file('unit6');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit6-" . $dateText . $image->getClientOriginalName());
            $unit6_name = Auth::user()->std_id .  "-unit6-" . $dateText . $image->getClientOriginalName();
        }

        // pdf All 

        if ($request->hasFile('project_all')) {
            $image = $request->file('project_all');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-All-" . $dateText . $image->getClientOriginalName());
            $project_all_name = Auth::user()->std_id .  "-All-" . $dateText . $image->getClientOriginalName();
        }


        $member = new Performance;
        $member->id_user = Auth::user()->id;
        $member->image =  $imageName;
        $member->std_class = $request['std_class'];
        $member->std_major = $request['std_major'];
        $member->std_typesubject = $request['std_typesubject'];
        $member->term = $request['term'];
        $member->std_year = $request['std_year'];
        $member->project_name = $request['project_name'];
        $member->keyword_name = $request['keyword_name'];
        $member->project_into = $request['project_into'];
        $member->unit1 = $unit1_name;
        $member->unit2 = $unit2_name;
        $member->unit3 = $unit3_name;
        $member->unit4 = $unit4_name;
        $member->unit5 = $unit5_name;
        $member->unit6 = $unit6_name;
        $member->project_all = $project_all_name;
        $member->person_name_1 = $request['person_name_1'];
        $member->person_name_2 = $request['person_name_2'];
        $member->person_name_3 = $request['person_name_3'];
        $member->person_name_4 = $request['person_name_4'];
        $member->person_name_5 = $request['person_name_5'];
        $member->person_name_6 = $request['person_name_6'];
        $member->person_name_7 = $request['person_name_7'];
        $member->person_name_8 = $request['person_name_8'];

        $member->save();
        return redirect('home')->with('message', "บันทึกสำเร็จ");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Performance::find($id);
        return view('performance.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'image' => ['image', 'mimes:jpg,png,jpeg,webp'],
            'std_class' => ['numeric'],
            'std_major' => ['required', 'string', 'max:255'],
            'std_typesubject' => ['required', 'string', 'max:255'],
            'std_year' => ['required', 'string', 'max:255'],
            'unit1' => ['file', 'mimes:pdf'],
            'unit2' => ['file', 'mimes:pdf'],
            'unit3' => ['file', 'mimes:pdf'],
            'unit4' => ['file', 'mimes:pdf'],
            'unit5' => ['file', 'mimes:pdf'],
            'unit6' => ['file', 'mimes:pdf'],
            'project_all' => ['file', 'mimes:pdf'],
        ]);

        $dateText = Str::random(6);
        $member =  Performance::find($id);


        // image
        if ($request->hasFile('image')) {
            $image_path = public_path() . '/assets/img/image_performance/' . $member->image;
            unlink($image_path);


            $image = $request->file('image');
            $data =   $image->move(public_path() . '/assets/img/image_performance', Auth::user()->std_id .  "-unit5-" . $dateText . $image->getClientOriginalName());
            $imageName = Auth::user()->std_id .  "-unit5-" . $dateText . $image->getClientOriginalName();
            $member->image =  $imageName;
        }

        // pdf บทที่ 1
        if ($request->hasFile('unit1')) {
            $file_path = public_path() . '/assets/img/file_pdf/' . $member->unit1;
            unlink($file_path);

            $image = $request->file('unit1');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit1-" . $dateText . $image->getClientOriginalName());
            $unit1_name = Auth::user()->std_id .  "-unit1-" . $dateText . $image->getClientOriginalName();
            $member->unit1 = $unit1_name;
        }
        // pdf บทที่ 2
        if ($request->hasFile('unit2')) {
            $file_path = public_path() . '/assets/img/file_pdf/' . $member->unit2;
            unlink($file_path);

            $image = $request->file('unit2');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit2-" . $dateText . $image->getClientOriginalName());
            $unit2_name = Auth::user()->std_id .  "-unit2-" . $dateText . $image->getClientOriginalName();
            $member->unit2 = $unit2_name;
        }
        // pdf บทที่ 3
        if ($request->hasFile('unit3')) {
            $file_path = public_path() . '/assets/img/file_pdf/' . $member->unit3;
            unlink($file_path);
            $image = $request->file('unit3');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit3-" . $dateText . $image->getClientOriginalName());
            $unit3_name = Auth::user()->std_id .  "-unit3-" . $dateText . $image->getClientOriginalName();
            $member->unit3 = $unit3_name;
        }
        // pdf บทที่ 4
        if ($request->hasFile('unit4')) {
            $file_path = public_path() . '/assets/img/file_pdf/' . $member->unit4;
            unlink($file_path);
            $image = $request->file('unit4');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit4-" . $dateText . $image->getClientOriginalName());
            $unit4_name = Auth::user()->std_id .  "-unit4-" . $dateText . $image->getClientOriginalName();
            $member->unit4 = $unit4_name;
        }

        // pdf บทที่ 5
        if ($request->hasFile('unit5')) {
            $file_path = public_path() . '/assets/img/file_pdf/' . $member->unit5;
            unlink($file_path);
            $image = $request->file('unit5');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit5-" . $dateText . $image->getClientOriginalName());
            $unit5_name = Auth::user()->std_id .  "-unit5-" . $dateText . $image->getClientOriginalName();
            $member->unit5 = $unit5_name;
        }
        // pdf บทที่ 6
        if ($request->hasFile('unit6')) {
            $file_path = public_path() . '/assets/img/file_pdf/' . $member->unit6;
            unlink($file_path);
            $image = $request->file('unit6');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-unit6-" . $dateText . $image->getClientOriginalName());
            $unit6_name = Auth::user()->std_id .  "-unit6-" . $dateText . $image->getClientOriginalName();
            $member->unit6 = $unit6_name;
        }

        // pdf All 

        if ($request->hasFile('project_all')) {
            $file_path = public_path() . '/assets/img/file_pdf/' . $member->project_all;
            unlink($file_path);
            $image = $request->file('project_all');
            $data =   $image->move(public_path() . '/assets/img/file_pdf', Auth::user()->std_id .  "-All-" . $dateText . $image->getClientOriginalName());
            $project_all_name = Auth::user()->std_id .  "-All-" . $dateText . $image->getClientOriginalName();
            $member->project_all = $project_all_name;
        }


        $member->std_class = $request['std_class'];
        $member->std_major = $request['std_major'];
        $member->std_typesubject = $request['std_typesubject'];
        $member->std_year = $request['std_year'];
        $member->project_name = $request['project_name'];
        $member->project_into = $request['project_into'];

        $member->save();
        return redirect('home')->with('message', "เเก้ไขสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
