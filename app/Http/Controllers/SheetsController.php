<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Revolution\Google\Sheets\Sheets;
class SheetsController extends Controller{
    public function postContactUs(Request $r){
        dd($r->all());
    }
}
