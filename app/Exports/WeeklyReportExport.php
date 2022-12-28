<?php

namespace App\Exports;

use IntlDateFormatter;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;

class WeeklyReportExport implements FromArray
{
    protected $weeklyReports;

    public function __construct(array $weeklyReports) {
        $this->weeklyReports = $weeklyReports;
    }

    public function array() : array
    {
        $rows = [];

        foreach ($this->weeklyReports as $weeklyReport) {
            $rows[] = [
                $weeklyReport['counter'],
                $weeklyReport['learned_weekly'],
            ];
        }

        return $rows;
    }
}
