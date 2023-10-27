<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Studentdetails;
use App\Models\Tutordetails;
use App\Models\Answers;
use App\Models\Sessionstudents;
use App\Models\Sessiondetails;


use Session;

class HomeController extends Controller
{
    function save_user(Request $request)
    {
        $length   = $request->length;
        $start    = $request->start;
        $search   = $request->search['value'];

        $all = Studentdetails::where(function($query) use ($search){
            $query->where('stu_num', 'like', '%'.$search.'%');
            $query->orwhere('user_name', 'like', '%'.$search.'%');
            $query->orwhere('email_id', 'like', '%'.$search.'%');
            $query->orWhere('school_name', 'like', '%'.$search.'%');
            })->offset($start)->limit($length)->get();

            $total = Studentdetails::where(function($query) use ($search){
            $query->where('stu_num', 'like', '%'.$search.'%');
            $query->orwhere('user_name', 'like', '%'.$search.'%');
            $query->orwhere('email_id', 'like', '%'.$search.'%');
            $query->orWhere('school_name', 'like', '%'.$search.'%');
            })->get();

        $result =[];
        $i =$start;

        foreach($all as $key =>$row)
        {
        // $value =Studentdetails::all();
        // foreach($value as $key =>$row)
        // {
             $result[$key]['sno']                          = $row->id;
             $result[$key]['stu_num']                      = $row->stu_num;
             $result[$key]['user_name']                    = $row->user_name;
             $result[$key]['email_id']                     = $row->email_id;
             $result[$key]['school_name']                  = $row->school_name;
             $result[$key]['subscription_plan_from']       = $row->subscription_plan_from;
             $result[$key]['subscription_plan_to']         = $row->subscription_plan_to;
             $result[$key]['action']                       ='<button onclick="edit( `'.$row->id.'`)">Edit</button><button onclick="del( `'.$row->id.'`)">Delete</button>';

        }
        $output =array(
            "recordsTotal"    => count($total),
            "recordsFiltered" => count($total),
            "data"            => $result
           );
        // return $result[0];
        return response()->json($output);
    }

    function stu_add(Request $request)
    {
      $data   = $request->input();
    $items=Studentdetails::orderby('id','DESC')->first();
      if(!isset($items))
    {
      $idd = 0;
      $stu_num  ='STU-'.++$idd;
    }
    else{
      $idd=$items['id'];
      $stu_num  ='STU-'.++$idd;
    }

      $value=Studentdetails::create(
            $dd=array(
              'stu_num'                   => $stu_num,
              'user_name'                 => $data['user_name'],
              'email_id'                  => $data['email_id'],
              'school_name'               => $data['school_name'],
              'subscription_plan_from'    => $data['subscription_plan_from'],
              'subscription_plan_to'      => $data['subscription_plan_to'],
            )
       );
      return $dd;
    }

    function data_view(Request $request)
    {
      $data  = $request->input();
      $value= Studentdetails::where('id', $data)->first(['id','stu_num','user_name','email_id','school_name','subscription_plan_from','subscription_plan_to']);
      return $value;
    }

    function  edit_data_stu(Request $request)
   {
    $data  = $request->input();
    $data  = request()->except('_token');

      $enter = Studentdetails::where('id', $data['id'])->where('stu_num', $data['stu_num'])->update(
        array(
          'user_name' => $data['user_name'],
          'email_id' => $data['email_id'],
          'school_name' => $data['school_name'],
          'subscription_plan_from' => $data['subscription_plan_from'],
          'subscription_plan_to' => $data['subscription_plan_to']
        )
      );

    return $data;
   }



   function delt_data(Request $request)
   {
    $data  = $request->input();
    $del   = Studentdetails::where('id', $data)->delete();
    return $del;
   }

    function graph_tech(){

        $res=[];
        $res1=[];
        $value=Tutordetails::get();
       foreach($value as $row)
       {
           $data =$row->user_name;
           array_push($res,$data);
           $tut=Answers::where('Tutor_id',$row->tutor_id)->wherebetween('Timestamp',[date('Y-m-d 00:00:00'),date('Y-m-d 23:59:59')])->count();
        //    $data1=[$tut];
           array_push($res1,$tut);
        }
 $chartData = [
            'labels' => $res,
            'data' => $res1,
        ];
             return response()->json($chartData);
  }

  function line_graph(){
    $res=[];
    $value=Sessionstudents::get();
//    foreach($value as $row)
//    {

       $data1=[
'Sunday' => Sessionstudents::where('entry_date',date('2023-10-22'))->count(),
'Monday'=>Sessionstudents::where('entry_date',date('2023-10-23'))->count(),
'Tuesday'=>Sessionstudents::where('entry_date',date('2023-10-24'))->count(),
'Wednesday'=>Sessionstudents::where('entry_date',date('2023-10-25'))->count(),
'Thrusday'=>Sessionstudents::where('entry_date',date('2023-10-26'))->count(),
'Friday'=>Sessionstudents::where('entry_date',date('2023-10-27'))->count(),
'Saturday'=>Sessionstudents::where('entry_date',date('2023-10-28'))->count(),
//    $tut=Sessionstudents::where('entry_date',date('2023-10-30'))->count(),
       ];
    //    array_push($res,$data1);
    // }
         return response()->json($data1);
}

function stu_counting(Request $request)
{
  $data  = $request->input();
  $value= Studentdetails::count();
  return $value;
}





}
