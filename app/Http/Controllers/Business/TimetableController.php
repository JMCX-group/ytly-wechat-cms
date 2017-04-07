<?php

namespace App\Http\Controllers\Business;

use App\Timetable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimetableController extends Controller
{
    public $page_level = "课程管理";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetables = Timetable::paginate(50);
        $page_title = "课程列表";
        $page_level = $this->page_level;

        return view('timetables.index', compact('timetables', 'page_title', 'page_level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "新建课程";
        $page_level = $this->page_level;

        return view('timetables.create', compact('page_title', 'page_level'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'profession' => $request['profession'],
            'course' => $request['course'],
            'class_count' => $request['count'],
            'status' => '启用'
        ];

        try {
            Timetable::create($data);

            return redirect()->route('timetable.index')->withSuccess('新增课程成功');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(array('error' => $e->getMessage()))->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $timetable = Timetable::find($id);
        $page_title = "编辑课程";
        $page_level = $this->page_level;

        return view('timetables.edit', compact('timetable', 'page_title', 'page_level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $timetable = Timetable::find($id);
        $timetable->profession = $request['profession'];
        $timetable->course = $request['course'];
        $timetable->class_count = $request['count'];
        $timetable->status = $request['status'];

        try {
            $timetable->save();

            return redirect()->route('timetable.index')->withSuccess('编辑课程成功');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(array('error' => $e->getMessage()))->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
