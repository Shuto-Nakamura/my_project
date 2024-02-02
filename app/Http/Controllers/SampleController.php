<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {

      $deleteResult = DB::connection("mysql")->delete("delete from users where name = '花子'");
      dd($deleteResult);

        return view("top/sample", []);
    }
}