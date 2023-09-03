<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('performance.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,webp'],
            'unit1' => ['required', 'file', 'mimes:pdf'],
            'unit2' => ['required', 'file', 'mimes:pdf'],
            'unit3' => ['required', 'file', 'mimes:pdf'],
            'unit4' => ['required', 'file', 'mimes:pdf'],
            'unit5' => ['required', 'file', 'mimes:pdf'],
            'unit6' => ['required', 'file', 'mimes:pdf'],
            'project_all' => ['required', 'file', 'mimes:pdf'],
        ]);

        $dateText = Str::random(6);
        // image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data =   $image->move(public_path() . '/assets/img/image_performance', Auth::user()->std_id .  "-unit5-" . $dateText . $image->getClientOriginalName());
            $data_imageName = Auth::user()->std_id .  "-unit5-" . $dateText . $image->getClientOriginalName();
            $imageName =  json_encode($data_imageName);
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
        $member->project_name = $request['project_name'];
        $member->project_into = $request['project_into'];
        $member->unit1 = $unit1_name;
        $member->unit2 = $unit2_name;
        $member->unit3 = $unit3_name;
        $member->unit4 = $unit4_name;
        $member->unit5 = $unit5_name;
        $member->unit6 = $unit6_name;
        $member->project_all = $project_all_name;

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}