<?php

namespace App\Http\Controllers\Business;

use App\Credit;
use App\People;
use App\Timetable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreditController extends Controller
{
    public $page_level = "学分管理";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credits = Credit::getCredit();
//        dd($credits);
        $page_title = "学分记录";
        $page_level = $this->page_level;

        return view('credits.index', compact('credits', 'page_title', 'page_level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $timetables = Timetable::all();
        $peoples = People::where('status', '学生')->get();
        $page_title = "新建评分";
        $page_level = $this->page_level;

        return view('credits.create', compact('timetables', 'peoples', 'page_title', 'page_level'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peoples = People::where('status', '学生')->get();
        $profession = $request['profession'];
        $course = $request['course'];
        $timetableId = Timetable::where('profession', $profession)->where('course', $course)->first()->id;

        $data = [
            'people_id' => 0,
            'timetable_id' => $timetableId,
            'num' => (isset($request['num']) && $request['num'] != '') ? $request['num'] : 0,
            'fraction' => ''
        ];

        try {
            foreach ($peoples as $people) {
                if ($people->profession == $profession && isset($request['student-' . $people->id]) && $request['student-' . $people->id] != '') {
                    $data['people_id'] = $people->id;
                    $data['fraction'] = $request['student-' . $people->id];
                    Credit::create($data);
                }
            }

            return redirect()->route('credit.index')->withSuccess('新增积分成功');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(array('error' => $e->getMessage()))->withInput();
        }
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
        //
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
        try {
            if (Credit::destroy($id)) {
                return redirect()->back()->withSuccess('删除积分成功');
            } else {
                return redirect()->back()->withErrors(array('error' => '删除数据失败'))->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(array('error' => $e->getMessage()));
        }
    }
}
