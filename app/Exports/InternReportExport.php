<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class InternReportExport implements WithMultipleSheets
{
    protected $weeklyReports;

    public function __construct(array $weeklyReports) {
        $this->weeklyReports = $weeklyReports;
    }


    public function sheets(): array
    {
        $sheets = [
            new DailyReportExport($this->weeklyReports),
            new WeeklyReportExport($this->weeklyReports),
        ];

        return $sheets;
    }
}
