@extends('layout.index')
@section('body')
<div class="back btns">
<a style='width:150px;height:50px ;background-color:#594C8A;margin-top: -75px;' href='{{url("students")}}' class='btn  btns btn-success btn-block'>
			رجوع</i>
			</a>
</div>

<a class="btns" href='{{url("students/deleted")}}'>
<i style="font-size:75px;color:red;position:absolute;left: 0;margin-left: 30px;" class=" fa fa-trash" aria-hidden="true"></i>	
</a>
<div class="btns">
<i style="cursor:pointer;font-size:75px;color:#FFF;position:absolute;right: 0;margin-right: 30px;" onClick="window.print()" class=" fa fa-print"></i>
</div>

<div class="container" id="#sandbox-container">
  

<div class="container">
	<div>
		<p style="color:#FFF;font-size:20px;font-weight:bold">    اسماء السادة المتقدمين لحضور الدورات في الفتره من {{request()->from}}  الي  {{request()->to}} </p>
	</div>
<h1 style='color:#FFF;text-align:center;padding:13px;'> المتقدمين</h1>


	<table class="second-user ">
		<thead>
			<tr>
				<th style="width:50%"> الاسم</th>
				<th> المنحة</th>
				<th>الرقم القومي </th>
				<th> السن</th>
				<th> نوع الاعاقة</th>
				<th>  رقم الهاتف</th>
				<th> المؤهل الدراسي</th>
                <th> الشهادات</th>
				<th class="btns">ملف التقديم</th>
				<th class="btns"> تعديل </th>
				<th class="btns"> طباعة الاقرار </th>
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

                @if($student->file)
				<td  class="btns"> <a  class="btn btn-primary " href='{{url("files/",$student->file)}}' target="_blank">عرض</a> </td>
                 @else
				 <td class="btns"> <p>لا يوجد</p></td>
				 @endif
				<td  class="btns"> <a  class="btn btn-success " href='{{url("students/edit",$student->id)}}' type="submit">تعديل</a>
				 </td>
				<td class="btns"> <a  class="btn btn-primary " href='{{url("students/ekrar",$student->id)}}' > عرض  </a> </td>

	

			</tr>
		  @endforeach
		
		</tbody>
	</table>
	<div style="margin-right: 470px;margin-top: 5px;">
	{{ $students->appends(request()->all())->render() }}
	</div>
	
</div>



@endsection
