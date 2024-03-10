<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function startAttendance(): RedirectResponse
    {
        $status = $this->attendanceService->getAttendanceState(Auth::id());

        if (!$status['isWorking']) {
            $this->attendanceService->startAttendance(Auth::id());
        }

        return redirect('/');
    }

    public function endAttendance(): RedirectResponse
    {
        $status = $this->attendanceService->getAttendanceState(Auth::id());

        if ($status['isWorking']) {
            $this->attendanceService->endAttendance($status['attendanceId'], $status['isBreaking']);
        }
        return redirect('/');
    }

    public function startRest(): RedirectResponse
    {
        $status = $this->attendanceService->getAttendanceState(Auth::id());

        if ($status['isWorking'] and !$status['isBreaking']) {
            $this->attendanceService->startRest($status['attendanceId']);
        }

        return redirect('/');
    }

    public function endRest(): RedirectResponse
    {
        $status = $this->attendanceService->getAttendanceState(Auth::id());

        if ($status['isWorking'] and $status['isBreaking']) {
            $this->attendanceService->endRest($status['attendanceId']);
        }

        return redirect('/');
    }
}
