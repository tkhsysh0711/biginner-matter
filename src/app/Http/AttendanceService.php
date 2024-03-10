<?php

namespace App\Services\Attendance;

use Illuminate\Pagination\LengthAwarePaginator;

interface AttendanceService
{
    public function getAttendanceState(int $userId): array;

    public function clockIn(int $userId): void;

    public function clockOut(int $attendanceId): void;

    public function breakBegin(int $attendanceId): void;

    public function breakEnd(int $attendanceId): void;

    public function getAttendanceList(String $date, int $perPage): LengthAwarePaginator;
}