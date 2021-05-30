<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Carbon\Carbon;
class taadeemController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|string',
            'date' => 'required|date',
            'n_id' => 'required|numeric|digits:14',
            'phone' => 'required|string',
            'qualification' => 'required|string',
            'disability' => 'required|string',
            'type' => 'required|string',
            'courses' => 'required|array',
        ]);
        if($request->type=='وزارة الاتصالات'){
          
            $finduser=Student::where('n_id',$request->n_id)->where('type','وزارة الاتصالات')->first();
            if($finduser){
                return redirect('taadeem')->with('warning','لم يتم التسجيل لانه مسجل في منحة وزارة الاتصالات ');
            }
        }
        if($request->type=='هيئة التسليح'){
            $finduser=Student::where('n_id',$request->n_id)->where('type','هيئة التسليح')->first();
            if($finduser){
                return redirect('taadeem')->with('warning','لم يتم التسجيل لانه  مسجل في منحة هيئة التسليح');
            }
        }
       
        
        $age=Carbon::parse($request->date)->age;
        $student=new Student;
        $student->name=$request->name;
        $student->age=$age;
        $student->n_id=$request->n_id;
        $student->phone=$request->phone;
        $student->qualification=$request->qualification;
        $student->disability=$request->disability;
        $student->type=$request->type;
        //$student->type[] = implode(',', $request->type[]);

        $student->save();
        foreach($request->courses as $course){
             $student->courses()->attach($course,['status'=>'Not Arrived']);
        }
        return redirect('taadeem')->with('success','تم تسجيل البيانات بنجاح');
        

    }
}
