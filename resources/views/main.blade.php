@extends('layout.index')
@section('body')


<div class="container">
<div class='row'>

 <div class='col-sm-6' style="margin-right: 165px;">
 <h1 class="students_header" style='margin-right:280px;margin-top:50px'>بحث </h1>
 <br><br>
 <form class="search" method='get' action='{{url("students/search")}}' >
 

					<input required type="text" class="textbox" name="value" placeholder="ادخل الاسم او الرقم القومي ">
          
					<input  title="Search" value="" type="submit" class="button"  >
				  </form>
 </div>


    

</div>
<div class='row'>
  <div class='col-sm-12'>
  <a class='btn btn-primary' style="margin-top:50px;padding:20px;border-radius:4px;margin-right:8px; background-color:#594C8A" href="{{url('taadeem')}}" style='margin-top:50px;margin-right:50%;color:white'>تسجيل بيانات متقدم جديد</a>
  <a class='btn btn-primary' style="margin-top:50px;width:208px;padding:20px;border-radius:4px;margin-left:8px;background-color:#594C8A" href="{{url('home/period')}}" style='margin-top:50px;margin-right:50%;color:white'>استعلام عن فترة</a>
  <a class='btn btn-primary' style="margin-top:50px;width:208px;padding:20px;border-radius:4px;margin-left:8px;background-color:#594C8A" href="{{url('home/all')}}" style='margin-top:50px;margin-right:50%;color:white'>   عرض جميع المتقدمين </a>
  </div>
</div>
</div>


@endsection
