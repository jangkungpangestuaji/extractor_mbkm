<?php

namespace App\Exports;

use IntlDateFormatter;
use Maatwebsite\Excel\Concerns\FromArray;

class DailyReportExport implements FromArray
{
    protected $weeklyReports;

    public function __construct(array $weeklyReports) {
        $this->weeklyReports = $weeklyReports;
    }

    public function array() : array
    {
        $rows = [];

        $fmt = new IntlDateFormatter(
                'id_ID',
                IntlDateFormatter::FULL,
                IntlDateFormatter::FULL,
                'Asia/Jakarta',
                IntlDateFormatter::GREGORIAN,
                // 'EEEE, dd MMMM y',
                'dd/M/y',
            );
        
        foreach ($this->weeklyReports as $weeklyReport) {
            if (isset($weeklyReport['daily_report'])){
                foreach ($weeklyReport['daily_report'] as $dailyReport) {
                    setlocale(LC_ALL, 'id_ID');
                    $time = strtotime($dailyReport['report_date']);
                    $rows[] = [
                        $weeklyReport['counter'],
                        $fmt->format($time),
                        $dailyReport['report'],
                        $dailyReport['counter'],
                    ];
                }
            }
        }

        return $rows;
    }
}
