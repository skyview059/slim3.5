<?php

/**
 * Description of authentication
 * Date: 08-09-2016
 * @author Kanny
 */

use Illuminate\Database\Capsule\Manager as DB;


class AppController {
    //put your code here
    public $var = 'Test';
    
    function getPackages( $id = 0 ){
        $id = intval($id);        
        if($id){
            $tables = DB::table('packages')->where('id',$id)->get();
            echo json_encode($tables);  
        } else {
            $tables = DB::table('packages')->get();
            echo json_encode($tables);  
        }                                            
    }
    
    
    function test(){
        echo 'Test';
    }
    
}
