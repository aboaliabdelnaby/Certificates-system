@extends('layout.index')
@section('body')
<div class="back btns">
<a style='width:150px;height:50px ;background-color:#594C8A;margin-top: -75px;' href='{{url("home")}}' class='btn  btns btn-success btn-block'>
			رجوع</i>
			</a>
</div>
	
<div class="container DisplayByDate">
<h1 class="students_header">أدخل الفترة</h1>
<form method='get' action='{{url("students/showdata")}}'>
<br><br><input class="form-control" name='from' style="width:30%;margin:auto" type='date' placeholder='من' required>
<br><input class="form-control" name='to' style="width:30%;margin:auto" type='date' placeholder='الى' required>
<br><input  class="btn btn-success " value="عرض" type="submit">

</form>


</div>


@endsection
