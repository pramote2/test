<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
// header('Content-Type: application/json; charset=utf-8');


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test1(){
        return json_encode('success1');
    }

    public function test2(Request $req){
        // return json_encode('success2');
        // $tests = $req -> input('data');
        return json_encode($req -> input('data'));
    }

    public function test3(Request $req){

        $data = $req -> input('data');
        $checklogin = DB::table('table_test')->where(['id'=>$data]) -> get();

        if(count($checklogin)>0){
            echo "login successs";
        }else{
            echo "login faill";
        }
        // $hostname = 'localhost';
        // //$username = 'sa';
        // $username = 'root';
        // $password = '';
        // $database = "test";
        // ini_set("memory_limit", "128M");
        // $conn =new PDO("sqlsrv:server=$hostname;database=$database",$username,$password);
        // // return $conn;
        // return json_encode($conn);


        // $conn_string = "host=localhost port=5432 dbname=test user=postgres password=1234";
        // $dbconn = pg_connect($conn_string)
        // // or die('Could not connect: ' . pg_last_error());
        // or die('Could not connect: ');
        // return json_encode('success3');
        // // return json_encode('success2');
        // // $tests = $req -> input('data');
        // // return json_encode($req -> input('data'));
    }


    public function test4(Request $req){

        $data = $req -> input('data');
        $checklogin = DB::table('table_test')->where(['ids'=>$data]) -> get();

        if(count($checklogin)>0){
            echo "login successs";
        }else{
            echo "login faill";
        }
        
    }


}
