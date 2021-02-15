<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Sheets;
class SheetsController extends Controller{
    public function postContactUs(Request $r){
        //Validate the request
        $Rules = [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ];
        $Validator = Validator::make($r->all() , $Rules);
        if($Validator->fails()){
            return response($Validator->errors()->all() , 400);
        }else{
            Sheets::spreadsheet(env('POST_SPREADSHEET_ID'))->sheet('Contact Us')->append([$r->all()]);
            return response('Thanke you for your message',200);
        }
    }
    public function postNewsletter(Request $r){
        //Validate the request
        $Rules = [
            'email' => 'required|email'
        ];
        $Validator = Validator::make($r->all() , $Rules);
        if($Validator->fails()){
            return response($Validator->errors()->all() , 400);
        }else{
            Sheets::spreadsheet(env('POST_SPREADSHEET_ID'))->sheet('Newsletter')->append([$r->all()]);
            return response('You have been signed up, Thanke you!',200);
        }
    }
}
