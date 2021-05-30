@extends('layout.index')
@section('body')

<div class=" btns back ">
<a style='width:150px;height:50px ;background-color:#594C8A;' href='{{url("home")}}' class='btn btn-success btn-block'>
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
				<th class="btns"> تعديل </th>
				<th class="btns"> حذف </th>
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
				
				<td class="btns"> <a  class="btn btn-success " href='{{url("students/edit2",$student->id)}}'>بيانات شخصية</a> <br>
				<a style="margin-top:3px;" class="btn btn-success " href='{{url("students/edit",$student->id)}}' type="submit">حالة الشهادة</a></td>
				<td  class="btns"> <a  class="btn btn-danger "data-toggle="modal" data-target="#exampleModalCenter">حذف</a> </td>
				<td class="btns"> <a  class="btn btn-primary "  href='{{url("students/ekrar",$student->id)}}'  > عرض الاقرار </a> </td>
                
					<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">هل انت متأكد جدا</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form method='get' action='{{url("students/delete")}}'>
	  <span class="label-input100">برجاء توضيح سبب الحذف</span>
					<input class="input100" type="text" name="reason" placeholder="ادخل سبب الحذف"  required>  
					<input type='hidden' name='id' value='{{$student->id}}'>
	  </div>
      <div class="modal-footer">
        <button type='submit'  class="btn btn-danger" style="margin:10px"  href=''>احذف الان</button>
		</form>
		<button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin:10px" >لا</button>

      </div>
    </div>
  </div>
</div>
       

			</tr>
		  @endforeach
		
		</tbody>
	</table>
	<div style="margin-right: 470px;margin-top: 5px;">
	{{ $students->appends(request()->all())->render() }}
	</div>
	
	
</div>

@endsection
