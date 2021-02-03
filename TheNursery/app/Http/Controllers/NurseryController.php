<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tblsession;
use App\tblcontact;
use App\tblchild;
use App\tblparent;
use App\tblregister;
use App\tbltitle;

use DB;
class NurseryController extends Controller
{
    public function home(){
    	return view('home');
    }
    public function about(){
    	return view('about');
    }
    public function gallery(){
        
        $data = DB::table('tblchildren')
        ->join('tblcontacts', 'tblcontacts.ConID', '=', 'tblchildren.ChildID')
        ->join('tblsessions', 'tblsessions.SessionID', '=', '.tblchildren.ChildID')
        ->join('tblregisters', 'tblregisters.RegID', '=', 'tblsessions.SessionID')
        ->select('tblchildren.*','tblcontacts.*','tblsessions.*','tblregisters.*')
        ->get();


        $data1 = DB::table('tblchildren')
        ->join('tblparents', 'tblparents.ParentID', '=', 'tblchildren.ChildID')
        ->join('tblcontacts', 'tblcontacts.ConID', '=', 'tblparents.ParentID')
        ->select('tblchildren.*','tblparents.*','tblcontacts.*')
        ->get();
        return view('gallery',  ['data' => $data, 'data1' => $data1] );
    }
    public function class(){
    	return view('class');
    }
    public function contact(){
    	return view('contact');
    }
    public function InsertData(Request $request){
        //initialization
        $inputValue = $request->all();

        $Child_fname = $request->input('fname');
        $Child_lname = $request->input('lname');
        $Child_DOB = date("Y-m-d", strtotime($request->input('dob')));
        $Child_gender = $request->input('gender');

        $F_fname = $request->input('f_fname');
        $F_lname = $request->input('f_lname');
        $M_fname = $request->input('m_fname');
        $M_lname = $request->input('m_lname');
        $F_mobile = $request->input('f_mob');
        $M_mobile = $request->input('m_mob');


        $Barangay = $request->input('barangay');
        $Town = $request->input('town');
        $Province = $request->input('prov');

        $con = $request->input('contact');
        $reg = date("Y-m-d", strtotime($request->input('regdate')));
        $presdate = date("Y-m-d", strtotime($request->input('regdate')));
        $sesp = $request->input('total');

        
    if($request->input('day')){
        if (is_array($request->input('day'))) {
            foreach($request->input('day') as $key =>$value){
                $value = implode(",",$request->input('day'));
            }
          } else {
            $value = implode(",",$request->input('day'));
       }
    }



        DB::INSERT("INSERT into tblchildren(Child_fname,Child_lname,Child_gender, Child_DOB)VALUES(?,?,?,?)", [$Child_fname,$Child_lname,$Child_gender,$Child_DOB]);
        $childdata =  DB::SELECT("SELECT * FROM tblchildren");

        DB::INSERT("INSERT into tblparents(Father_fname,Father_lname,F_mobile_num,Mother_fname,Mother_lname,M_mobile_num,Parent_address, Parent_town, postcode)VALUES(?,?,?,?,?,?,?,?,?)", [$F_fname,$F_lname,$F_mobile,$M_fname,$M_lname,$M_mobile,$Barangay,$Town,$Province]);
        $pardata =  DB::SELECT("SELECT * FROM tblparents");

        DB::INSERT("INSERT into tblcontacts(contact)VALUES(?)", [$con]);
        $condets =  DB::SELECT("SELECT * FROM tblcontacts");

        DB::INSERT("INSERT into tblsessions(SessionDay,SessionPrice)VALUES(?,?)", [$value,$sesp]);
        $sesdets =  DB::SELECT("SELECT * FROM tblsessions");

        DB::INSERT("INSERT into tblregisters(RegDate,DatePresent)VALUES(?,?)", [$reg,$presdate]);
        $reddets =  DB::SELECT("SELECT * FROM tblregisters");

        $data = DB::table('tblchildren')
        ->join('tblcontacts', 'tblcontacts.ConID', '=', 'tblchildren.ChildID')
        ->join('tblsessions', 'tblsessions.SessionID', '=', '.tblchildren.ChildID')
        ->join('tblregisters', 'tblregisters.RegID', '=', 'tblsessions.SessionID')
        ->select('tblchildren.*','tblcontacts.*','tblsessions.*','tblregisters.*')
        ->get();


        $data1 = DB::table('tblchildren')
        ->join('tblparents', 'tblparents.ParentID', '=', 'tblchildren.ChildID')
        ->join('tblcontacts', 'tblcontacts.ConID', '=', 'tblparents.ParentID')
        ->select('tblchildren.*','tblparents.*','tblcontacts.*')
        ->get();
        return view('gallery',  ['data' => $data, 'data1' => $data1] );
    }

}