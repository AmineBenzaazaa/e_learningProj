<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Categorie;
use App\Models\Section;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cts = Course::get();
        return view('instructeur/courses')->with('cts', $cts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cts = Categorie::get();
        return view('instructeur/add_course')->with('cts', $cts);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file;
            $new_file = time() . $request->id . $file->GetClientOriginalName();
            $file->move('storage/' . auth()->user()->id . '/image', $new_file);
            $vrai = 'storage/' . auth()->user()->id . '/image/' . $new_file;
        } else {
            $vrai = "";
        }
        $course = Course::Create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'level' => $request->level,
            'language' => $request->language,
            'price' => $request->price,
            'discount' => $request->discount,
            'tags' => $request->tags,
            'overview_provider' => $request->overview_provider,
            'overview_url' => $request->overview_url,
            'thumbnail' => $vrai,
            'status' => "pending",
            'user_id' => auth()->user()->id,
        ]);
        return redirect(route('courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cts = Categorie::get();
        $crs = Course::where('id',$id)->first();
        $sec = Section::where('course_id',$id)->get();
        return view('instructeur/edit_course')->with('cts', $cts)->with('crs',$crs)->with('sec',$sec);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
