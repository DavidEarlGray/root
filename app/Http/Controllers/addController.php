<?php 
namespace App\Http\Controllers;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use DB;
use Illuminate\Http\UploadedFile;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\html;

class addController extends Controller {
    public function insert(){
       
        $pictures = [];
        $people = DB::table('teachers')->pluck('Name');
        $cat = DB::table('categories')->pluck('Name');
        $mat = DB::table('materials')->pluck('id') -> toArray();
        $scol = DB::table('schools')->pluck('Name');
        return view('InsertData',array('teachers'=>$people, 'categories'=>$cat, 'schools'=>$scol, 'pictures' => $pictures));
    }

    public function cat(Request $request) {
        $category = $request->input('category');  
        $prevId = DB::table('categories')->pluck('Id');
        $categories = DB::table('categories')->pluck('Name') -> toArray();
 
        if(in_array($category,$categories)) {
            echo "<p>Data was duplicate</p>",'<a href = "/insert">Click Here</a> to go back.';
        }
        else {
        $myuuid = Uuid::uuid4();
        $data= array('Id'=> $myuuid, 'Name' => $category);
       
        DB::table('categories')->insert($data);
        echo $category;
        echo $prevId;
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
    }
    public function mat(Request $request) {
        $name =DB::table('materials') -> pluck('images') -> toArray();
        $materials = [];
        $photos = [];
        $paths = DB::table('materials') -> pluck('materials') -> toArray(); 
        $myuuid = Uuid::uuid4();
        if ($request->file('files') != null) {
        foreach($request->file('files') as $key => $file)
        {
            
            $name = $file->getClientOriginalName(); 
            $path = $file->storeAs('materials',$name, 'public');
            $newpath =  ' storage/' . $path;
            
            $name = $file->getClientOriginalName();
            if(in_array($name,$paths)) {
                echo "<p>Data was duplicate</p>",'<a href = "/insert">Click Here</a> to go back.';
            }
            echo($path);
            array_push($materials,$newpath);

        
        };
    }
     
        foreach($request->file('photos') as $key => $file)
        {
            $name = $file->getClientOriginalName(); 
            $path = $file->storeAs('images',$name, 'public');
            $newpath =  ' storage/' . $path;
           
            $name = $file->getClientOriginalName();
         
           

        
        };


    $data= array('Id'=> $myuuid, 'materials' => implode($materials), 'images' => implode($photos));
        DB::table('materials')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    
}
    public function teach(Request $request){
        $phone = $request->input('phone'); 
        $phone = trim($phone);
        $phones = DB::table('teachers') -> pluck('Phone') -> toArray();
        $name1 = $request->input('name'); 
        $names = DB::table('teachers') -> pluck('Name') -> toArray();
        $emails = DB::table('teachers') -> pluck('Email') -> toArray();
        $adress = $request->input('adress'); 
        $myuuid = Uuid::uuid4();
        
        if(in_array($phone, $phones) || in_array($name1, $names) || in_array($adress,$emails)) {
            echo "<p>Data was duplicate</p>",'<a href = "/insert">Click Here Enter a phone numver</a> to go back.';
        } else {
            if ($request->file('pics') != null) {
                $file = $request->file('pics')[0];
                $name = $file->getClientOriginalName(); 
            $path = $file->storeAs('images',$name, 'public');
            $newpath =  'storage/' . $path;
            }   else {
                $newpath = 'storage/images/bland.jpg';
            }
        $data= array('Id'=> $myuuid, 'Name' => $name1, 'Email' => $adress, 'Phone' => intval($phone), 'Picture' => $newpath);
       
        DB::table('teachers')->insert($data);
        echo implode($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
    }

    public function school(Request $request) {
        $name = $request->input('name'); 
        $names = DB::table('schools') -> pluck('Name') -> toArray();
        $adress = $request->input('address'); 
        $addresses = DB::table('schools') -> pluck('address') -> toArray();
        $teach = $request->get('teachers');
        $id = DB::table('teachers') -> where('Name', '=', $teach)-> pluck('Id');
        $myuuid = Uuid::uuid4();
        if(in_array($adress, $addresses) ||in_array($name, $names) ) {
            echo "<p>Data was duplicate</p>",'<a href = "/insert">Click Here</a> to go back.';
        } 
       else {
      
        $data= array('Id'=> $myuuid, 'Name' => $name, 'Address' => $adress, 'TeacherId' => $id[0]);
        DB::table('schools')->insert($data);
        echo '<a href = "/insert">Click Here</a> to go back.';
       }
        

    }

    public function project(Request $request) {
        $projuuid = Uuid::uuid4();
        $index = 0;
       



        

        $name = $request->input('pj-name');
        $names = DB::table('Projects') -> pluck('Title') -> toArray(); 
        if(in_array($name, $names) ) {
            echo "<p>Data was duplicate</p>",'<a href = "/insert">Click Here</a> to go back.';
        } else {
        $desc = $request->input('pj-desc'); 
        $start = $request->input('pj-start'); 
        $end = $request->input('pj-end'); 
        $teach = $request->teachers;
        $scol = $request->schools;
        $cat = $request->categories;
        $files = $request->file('files');
        $idT = DB::table('teachers')->where('Name', '=', $teach)->pluck('Id');
        $idS = DB::table('schools')->where('Name', '=', $scol)->pluck('Id');
        $idC = DB::table('categories')->where('Name', '=', $cat)->pluck('Id');
        $data= array('Id'=> $projuuid, 'Title' => $name, 'Description' => $desc, 'CategoryId' => $idC[0], 'StartDate' => $start, 
        'EndDate' => $end, 'TeacherId' => $idT[0], 'SchoolId' => $idS[0]);
        DB::table('projects')->insert($data);

        if ($request->file('files') != null) {
            foreach($request->file('files')as $key => $file)
            {
                $matuuid = Uuid::uuid4();
                $name = $file->getClientOriginalName(); 
                $path = $file->storeAs('materials',$name, 'public');
                $newpath =  'storage/' . $path;
                
                $name = $file->getClientOriginalName();
                echo '<h1>heee</h1>';
                DB::table('materials')->insert(array('id' =>  $matuuid,'url' => $newpath, 'type' => 'DOCT', 'ProjectId' => $projuuid  ));
    
            
            };
        }
            if ($request->file('photos') != null) {
               
            foreach($request->file('photos') as $key => $file)
            {
                $type = "IMAG";
                if($index == 0) {
                    $type = "TIMAG";
                }

                $matuuid = Uuid::uuid4();
                $name = $file->getClientOriginalName(); 
                $path = $file->storeAs('images',$name, 'public');
                $newpath =  'storage/' . $path;
               
                $name = $file->getClientOriginalName();
             
                
                DB::table('materials')->insert(array('id' =>  $matuuid,'url' => $newpath, 'type' => $type, 'ProjectId' => $projuuid  ));
    
                $index += 1;
            };
        } else {
            $matuuid = Uuid::uuid4();
            $newpath = 'storage/images/no-image.png';
            DB::table('materials')->insert(array('id' =>  $matuuid,'url' => $newpath, 'type' => 'TIMAG', 'ProjectId' => $projuuid  ));
        }
    
        
        }
    }

}