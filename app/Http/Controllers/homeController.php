<?php 
namespace App\Http\Controllers;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use DB;
use Illuminate\Http\UploadedFile;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
class homeController extends Controller {
    public function loadhome() {
        function MonthMake($stDate,$enDate) {
            $final = [];
            $st = explode('-' , $stDate)[1];
            $en = explode('-' , $enDate)[1];
            $months = array('01' => 'Ianuarie', '02' => 'Februarie', '03' => 'Martie', '04' => 'Aprilie', '05' => 'Mai', '06' => 'Iunie', '07' => 'Iulie', '08' => 'August','09' => 'Septembrie', '10' => 'Octombrie', '11' => 'Noiembrie', '12' => 'Decembrie');
            $sd = $months[$st];
            $final[] = $sd;
            $ed = $months[$en];
            if($ed != $sd)  {
                $final[] = $ed;
            }


            return $final;
        }
        
        // $st_d =  DB::table('projects') -> pluck('StartDate');
        // $en_d = DB::table('projects') -> pluck('EndDate');
        $ids =  DB::table('projects') -> pluck('id');
        $names= [];
        // $names = DB::table('projects') -> pluck('Title');
        // $cadids = DB::table('projects') -> pluck('CategoryId');
        // $scoolId = DB::table('projects') -> pluck('SchoolId');
        $address = [];
        $cat = [];
        $scol = [];
        $dates = [];
        $pics = [];
        for($x= 0; $x < count($ids); $x++) {
     
        $csi = DB::table('projects')->where('Id', '=', $ids[$x])->pluck("SchoolId");
        $cn = DB::table('projects')->where('Id', '=', $ids[$x])->pluck("Title");
        $start = DB::table('projects')->where('Id', '=', $ids[$x])->pluck("StartDate");
        $end = DB::table('projects')->where('Id', '=', $ids[$x])->pluck("EndDate");
        $cci = DB::table('projects')->where('Id', '=', $ids[$x])->pluck("CategoryId");
        $date = MonthMake($start,$end);
        $add= DB::table('schools') ->where('Id', '=', $csi[0]) -> pluck('Address');
        $cats= DB::table('categories') ->where('Id', '=',$cci[0]) -> pluck('Name');
        $scols= DB::table('schools') ->where('Id', '=',$csi[0]) -> pluck('Name');
        $pictures = DB::table('materials') ->where('ProjectId', '=',$ids[$x])->where('type', '=', 'TIMAG') -> pluck('url');
        $address[] = $add[0];
        $cat[] = $cats[0];
        $dates[] = $date;
        $scol[] = $scols[0];
        $names[] = $cn[0];
        if(empty($pictures) != TRUE) {
             $pic[] = $pictures[0];
        } 
        elseif (empty($pictures) == TRUE) {
            # code...
     
            $pic[] = '';
        }
        };
        
        return view('home', compact('names','cat','address','scol','dates','pic','ids')) ;

       

    }
   

}