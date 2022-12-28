<?php

use App\Exports\InternReportExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('extractor', function(Request $request) {
    $response = Http::withToken($request->token)->get('https://api.kampusmerdeka.kemdikbud.go.id/magang/report/allweeks/'.$request->id_reg);

    if ($response->ok()) {
        $weeklyReports = $response->json()['data'];
        
        return Excel::download(new InternReportExport($weeklyReports), 'daily-report.xlsx');
    }

    return response('Maaf terjadi kesalahan, coba ulang', $response->status());
});
