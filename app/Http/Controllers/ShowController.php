<?php 
namespace App\Http\Controllers;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use DB;
use Illuminate\Http\UploadedFile;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ShowController extends Controller {
  public function showSchool(Request $request) {
    $id = $_GET['id'];
    $materials = [];
    $pictures = [];
    $name = DB::table('Projects')->where('id', '=', $id)->pluck('Title');
    $desc= DB::table('Projects')->where('id', '=', $id)->pluck('Description');
    $std= DB::table('Projects')->where('id', '=', $id)->pluck('StartDate');
    $endd= DB::table('Projects')->where('id', '=', $id)->pluck('EndDate');
    $tid= DB::table('Projects')->where('id', '=', $id)->pluck('TeacherId');
    $cid= DB::table('Projects')->where('id', '=', $id)->pluck('CategoryId');
    $cd= DB::table('Categories')->where('id', '=', $cid)->pluck('Name');
    $sid =DB::table('Projects')->where('id', '=', $id)->pluck('SchoolId');
    $tn = DB::table('Teachers')->where('id', '=', $tid)->pluck('Name');
    $ta = DB::table('Teachers')->where('id', '=', $tid)->pluck('Email');
    $tp = DB::table('Teachers')->where('id', '=', $tid)->pluck('Phone');
    $tpp = DB::table('Teachers')->where('id', '=', $tid)->pluck('Picture');
    $sn = DB::table('Schools')->where('id', '=', $sid)->pluck('Name');
    $sa = DB::table('Schools')->where('id', '=', $sid)->pluck('Address');
    $files = DB::table('Materials')->where('ProjectId', '=', $id)->pluck('url');
    foreach($files as $file) {
      $type = DB::table('materials')->where('url', '=', $file)->pluck('type');
      if( $type[0] == "DOCT" ){
          $materials[] = $file;
      }
      else {
        $pictures[] = $file;
      }
    }
    

    // Handle the data as needed

    return response()->json(['cat'=> $cd[0],'name' => $name[0],'desc' => $desc[0], 'start' => $std[0], 'endd' => $endd, 'teacher_pp' => $tpp[0], 'teacher_n' => $tn[0], 'teacher_a' => $ta[0],'teacher_p' => $tp[0], 'school_n' => $sn[0], 'school_a' => $sa[0], 'Materials' => $materials   , 'Pictures' => $pictures]);

  }
  public function scl() {
    return view('school');
  }
} 
