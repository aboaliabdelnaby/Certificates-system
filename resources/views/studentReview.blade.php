@extends('layout.index')
@push("css-style")
<link rel="stylesheet" type="text/css" href="{{asset('../css/forms-new.css')}}">
@endpush
@section('body')

<div class="back">
<a style='width:150px;height:50px ;background-color:#594C8A;' href='{{url("students")}}' class='btn btn-success btn-block'>
			رجوع</i>
			</a>
</div>
<div class="container-contact100">
		<div class="wrap-contact100">
			
			
			<form class="contact100-form validate-form" method='post' action='{{url("register/update")}}' enctype="multipart/form-data">
			   @csrf 
				<span class="contact100-form-title">
                    مراجعة المتقدمين

            </span>
				@if(session('success'))
                <div class='alert alert-success text-center'>{{session('success')}}</div>
                @endif

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">الاسم</span>
					<p>{{$student->name}}</p>
					
                </div>
               

				<div class="wrap-input100 validate-input" data-validate = "ادخل الرقم الصحيح">
					<span class="label-input100">الرقم القومي</span>
					<p>{{$student->n_id}}</p>
				
				</div>
				<div class="wrap-input100 validate-input" data-validate = "ادخل الرقم الصحيح" >
					<span class="label-input100">رقم التليفون</span>
					<p>{{$student->phone}}</p>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "ادخل الرقم الصحيح">
					<span class="label-input100">المؤهل </span>
					<p>{{$student->qualification}}</p>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">نوع الاعاقه</span>
                    <p>{{$student->disability}}</p>
                </div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">المنحة</span>
					<div style="width:50%">
						<select class="selection-2" name="type"  >
						
						<option   disabled> اختار المنحة</option>
							<option   @if($student->type=='وزارة الاتصالات') selected @endif>وزارة الاتصالات</option>
							<option   @if($student->type=='هيئة التسليح') selected @endif>هيئة التسليح </option>
							
							
						</select>
						@error('disability')
                       <span style='color:red'>{{ $message }}</span>
                     @enderror
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">الشهادات/الكورسات</span>
					<div style="width: 80%"> 
						<select   class="selection-2" name="courses[]" multiple >
							<option disabled> اختار الشهادات</option>
                            @foreach($courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
							
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

        
                
                    <input type='hidden' name='id' value='{{$student->id}}'>

                
                <table >
					<thead>
						<tr>

					<th> الشهادة</th>
					<th> الحالة</th>
						</tr>	
					<thead>
						<tbody >
                            @php 
                            $i=0;
                            @endphp
							@foreach($student->courses as $course)
							<tr style="background:#fff;">
								<td style="color:#000 !important; font-size:15px; font-weight:bold">{{$course->name}}</td>
								<td>
                                  @php
                                  $i++
                                  @endphp
                                <div>
						<select class="selection-2" name="status{{$i}}" required>
						
						<option disabled> اختار حالة الشهادة</option>
							<option value='Not Arrived_{{$course->id}}' @if($course->pivot->status=='Not Arrived') selected @endif >Not Arrived</option>
							<option value='Arrived_{{$course->id}}'  @if($course->pivot->status=='Arrived') selected @endif >Arrived </option>
							<option value='Delivered_{{$course->id}}' @if($course->pivot->status=='Delivered') selected @endif> Delivered</option>
							
						</select>
					    </div>
                                </td>
							</tr>
							@endforeach
						</tbody>
                </table>
                <input type='hidden' name='count' value='{{$i}}'>


                <div class="file-upload-wrapper wrap-input100 input100-select" style="margin-top:10px">
                <span class="label-input100" style="font-size:17px; font-weight:bold"> اختار الملف</span>
                <input type="file" id="input-file-now" name='file' class="file-upload">
                </div>




				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit">
							<span>
								موافق
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



    <div id="dropDownSelect1"></div>
    
    @endsection
