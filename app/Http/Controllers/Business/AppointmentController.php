<?php

namespace App\Http\Controllers\Business;

use App\Appointment;
use App\Doctor;
use App\Http\Helper\MsgAndNotification;
use App\Http\Helper\AppointmentStatus;
use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public $page_level = "平台代约";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function todo()
    {
        $appointments = Appointment::getPlatform('wait-0');
        foreach ($appointments as &$appointment) {
            $appointment->status = AppointmentStatus::content($appointment->status);
        }
        $page_title = "请求代约";
        $page_level = $this->page_level;

        return view('appointments.todo', compact('appointments', 'page_title', 'page_level'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function processing()
    {
        $appointments = Appointment::getPlatform_processing();
        foreach ($appointments as &$appointment) {
            $appointment->status = AppointmentStatus::content($appointment->status);
        }
        $page_title = "代约进行中";
        $page_level = $this->page_level;

        return view('appointments.processing', compact('appointments', 'page_title', 'page_level'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function completed()
    {
        $appointments = Appointment::getPlatform_completed();
        foreach ($appointments as &$appointment) {
            $appointment->status = AppointmentStatus::content($appointment->status);
        }
        $page_title = "代约完成";
        $page_level = $this->page_level;

        return view('appointments.completed', compact('appointments', 'page_title', 'page_level'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function failed()
    {
        $appointments = Appointment::getPlatform('close-3');
        foreach ($appointments as &$appointment) {
            $appointment->status = AppointmentStatus::content($appointment->status);
        }
        $page_title = "拒绝代约";
        $page_level = $this->page_level;

        return view('appointments.failed', compact('appointments', 'page_title', 'page_level'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointments = Appointment::getAllDetail($id);
        $appointments->status = AppointmentStatus::content($appointments->status);
        if ($appointments->doctor_auth == 'completed') {
            $appointments->doctor_auth = '已认证';
        } elseif ($appointments->doctor_auth == 'processing') {
            $appointments->doctor_auth = '认证中';
        } elseif ($appointments->doctor_auth == 'fail') {
            $appointments->doctor_auth = '认证失败';
        } else {
            $appointments->doctor_auth = '未认证';
        }

        $page_title = "确认约诊";
        $page_level = $this->page_level;

        return view('appointments.edit', compact('appointments', 'page_title', 'page_level'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $appointments = Appointment::getAllDetail($id);
        $appointments->status = AppointmentStatus::content($appointments->status);
        if ($appointments->doctor_auth == 'completed') {
            $appointments->doctor_auth = '已认证';
        } elseif ($appointments->doctor_auth == 'processing') {
            $appointments->doctor_auth = '认证中';
        } elseif ($appointments->doctor_auth == 'fail') {
            $appointments->doctor_auth = '认证失败';
        } else {
            $appointments->doctor_auth = '未认证';
        }

        $page_title = "确认约诊";
        $page_level = $this->page_level;

        return view('appointments.view', compact('appointments', 'page_title', 'page_level'));
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
        $appointments = Appointment::find($id);
        if(!isset($request['refuse_info']) || $request['refuse_info'] == '' || $request['refuse_info'] == null){
            $appointments->price = Doctor::find($appointments->doctor_id)->first()->fee;
            $appointments->status = 'wait-1'; //待患者支付
        }else {
            $appointments->status = 'close-3'; //医生拒绝接诊
            $appointments->refusal_reason = $request['refuse_info']; //医生拒绝接诊
        }

        try {
            if ($appointments->save()) {
                MsgAndNotification::sendAppointmentsMsg($appointments);  //推送消息记录

                /**
                 * 用友盟向患者端推送消息
                 */
                $patient = Patient::where('phone', $appointments->patient_phone)->first();
                if (isset($patient->id)) {
                    if ($patient->device_token != '' && $patient->device_token != null) {
                        MsgAndNotification::pushAppointmentMsg($patient->device_token, $appointments->status, $appointments->id, 'patient'); //向患者端推送消息
                    }
                }

                return redirect()->route('appointment.todo')->withSuccess('完成处理');
            } else {
                return redirect()->back()->withErrors(array('error' => '更新数据失败'))->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(array('error' => $e->getMessage()))->withInput();
        }
    }

    /**
     * 拒绝代约
     *
     * @param $id
     * @return $this
     */
    public function refuse($id)
    {
        $appointments = Appointment::find($id);
        $appointments->status = 'close-3'; //医生拒绝接诊

        try {
            if ($appointments->save()) {
                return redirect()->route('appointments.platform')->withSuccess('拒绝成功');
            } else {
                return redirect()->back()->withErrors(array('error' => '更新数据失败'))->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(array('error' => $e->getMessage()))->withInput();
        }
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
