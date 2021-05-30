<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Course;
use App\Student;
class studentsController extends Controller
{
    public function all(Request $request){
        
        $students=Student::where('showing',1)->latest()->paginate(10);
        return view('studentsData',compact('students'));
    }
    
    public function show(Request $request){
        
        $students=Student::whereDate('created_at','>=',$request->from)->whereDate('created_at','<=',$request->to)->where('showing',1)->latest()->paginate(10);
        return view('studentsShow',compact('students'));
    }
    
    public function deleted(){
        
        $students=Student::where('showing',0)->latest()->paginate(10);
        return view('deletedStudents',compact('students'));
    }
    

    public function showData(Request $request){
        $students=Student::whereDate('created_at','>=',$request->from)->whereDate('created_at','<=',$request->to)->where('showing',1)->latest()->paginate(10);
        return view('studentsData',compact('students'));
    }
   
    public function edit($id){

         $student=Student::find($id);
         $courses=Course::all();
         return view('studentReview',compact('student','courses'));
    }
    public function ekrar($id){
        $student=Student::find($id);
        //$courses = Course::where('status', 'LIKE', '%' . 'Delivered' . '%');
        return view('ekrar',compact('student'));
    
    }
    public function edit2($id){
        $student=Student::find($id);
        return view('completeEdit',compact('student'));
   }
 
    public function update(Request $request){
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        // ]);
        $student=Student::find($request->id);
        $student->qualified=$request->qualified;
        if($request->file){
          
            $fileName = time().'.'.$request->file->getClientOriginalExtension();  
            $request->file->move(public_path('files'), $fileName);
            $student->file=$fileName;
        }
        
        $student->type=$request->type;
        
        $student->save();
        $count=(int)$request->count;
        for($i=1;$i<=$count;$i++){
            $status=$request->input('status'.$i);
            $state = explode('_',$status);
            $status = $state[0];
            $course_id = (int)$state[1];
            $student->courses()->detach($course_id);
            $student->courses()->attach($course_id,['status'=>$status]);
        }
        if($request->courses){
            foreach($student->courses as $course){
                $student->courses()->detach($course->id);
            }
            foreach($request->courses as $course){
                $student->courses()->attach($course,['status'=>'Not Arrived']);
           }
        }
       
        return redirect()->back();
        
          


    }

 


    public function update2(Request $request){
        $this->validate($request,[
            'name' => 'required|string',
            'age' => 'required|numeric|max:62',
            'n_id' => 'required|numeric|digits:14',
            'phone' => 'required|string',
            'qualification' => 'required|string',
            'disability' => 'required|string',
        ]);

        $student=Student::find($request->id);       
        $student->name=$request->name;
        $student->age=$request->age;
        $student->n_id=$request->n_id;
        $student->phone=$request->phone;
        $student->qualification=$request->qualification;
        $student->disability=$request->disability;
        $student->save();


        return view('main')->with('success','تم تسجيل البيانات بنجاح');

    
    }
    public function destroy(Request $request){
        $this->validate($request,[
            'reason' => 'required|string',
            'id' => 'required',
        ]);
        $student=Student::find($request->id);
        $student->showing=0;
        $student->reason=$request->reason;
        $student->save();
        return redirect()->back();
    }
    //public function search($value){
        //$student = student::where('name', 'LIKE', '%' . $value . '%')
        //->orWhere('n_id', 'LIKE', '%' . $value . '%')
        //->get();

      //  return view('main',compact('student'));
    //}
    public function search(Request $request){
    
    $value =$request->value ;
    $students = Student::Where('showing',1)
        ->where('name', 'LIKE', '%' . $value . '%')
        ->orWhere('n_id', 'LIKE', '%' . $value . '%')
        ->latest()->paginate(10);
        if(count($students) > 0)
        return view('searchResult',compact('students'));
    
      //  return view('searchResult')->withDetails($student)->withQuery ( $value );
    else return view ('notFound');


}


public function logout(){
    auth()->logout();
    return redirect('/');
}
public function getPeriod(){
    return view('time-period');
}
public function notAllowed(){
    return view('notAllowed');
}
public function getPeriodU1(){
    return view('time-periodU1');
}

}
