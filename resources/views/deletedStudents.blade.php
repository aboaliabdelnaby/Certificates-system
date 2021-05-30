@extends('layout.index')
@section('body')


<div class="back btns">
<a style='width:150px;height:50px ;background-color:#594C8A;margin-top: -75px;' href='{{url("home")}}' class='btn  btns btn-success btn-block'>
			رجوع</i>
			</a>
</div>
<div class="container" id="#sandbox-container">
  
<div class="container">

<h1 style='color:#FFF;text-align:center;padding:13px;'> المحذوف</h1>

	<table  class="first-user">
		<thead>
			<tr>
			<th  style="width:50%"> الاسم</th>
				<th> المنحة</th>
				<th>الرقم القومي </th>
				<th> السن</th>
				<th> نوع الاعاقة</th>
				<th>  رقم الهاتف</th>
				<th> المؤهل الدراسي</th>
                <th> الشهادات</th>
				<th> سبب الحذف </th>

			</tr>
		</thead>
		<tbody>
		  @foreach($students as $student)
		  <tr id="heads">
		  <td style="width:150px">{{$student->name}}</td>
				<td>{{$student->type}}</td>
				<td>{{$student->n_id}}</td>
				<td>{{$student->age}}</td>
				<td>{{$student->disability}}</td>
				<td>{{$student->phone}}</td>
				<td>{{$student->qualification}}</td>
				<td>

				<table>
					<thead>
						<tr>

					<th> الشهادة</th>
					<th> الحالة</th>
						</tr>	
					<thead>
						<tbody>
							@foreach($student->courses as $course)
							<tr>
								<td>{{$course->name}}</td>
								<td>{{$course->pivot->status}}</td>
							</tr>
							@endforeach
						</tbody>
				</table>




				</td>
				<td>{{$student->reason}}</td>
				
			                
			</tr>
		  @endforeach
		
		</tbody>
	</table>
	<div style="margin-right: 470px;margin-top: 5px;">
	{{ $students->appends(request()->all())->render() }}
	</div>
	
	
</div>

@endsection
