@extends('layout.index')
@section('body')

<div class="container DisplayByDate">
<h1 class="students_header">أدخل الفترة</h1>
<form method='get' action='{{url("students/show")}}'>

<br><br><input class="form-control" name='from' style="width:30%;margin:auto" type='date' placeholder='من' required>
<br><input class="form-control" name='to' style="width:30%;margin:auto" type='date' placeholder='الى' required>
<br><input  class="btn btn-success " value="عرض" type="submit">

</form>


</div>




@endsection
	