@extends('layout.index')
@push("css-style")
<link rel="stylesheet" type="text/css" href="{{asset('../css/forms-new.css')}}">
@endpush
@section('body')

<div class="back">
<a style='width:150px;height:50px ;background-color:#594C8A;' href='{{url("home")}}' class='btn btn-success btn-block'>
			رجوع</i>
			</a>
</div>	
<div class="container DisplayByDate sonbaty-new">




</div>

<div class="container-contact100">

		<div class="wrap-contact100" style="margin-top:85px">
		
			<form class="contact100-form validate-form" method='post' action='{{url("register/store")}}'>
			   @csrf 
				<span class="contact100-form-title">
					تسجيل المتقدمين
				</span>
				@if(session('success'))
                <div class='alert alert-success text-center'>{{session('success')}}</div>
                @endif

				@if(session('warning'))
                <div class='alert alert-warning text-center'>{{session('warning')}}</div>
                @endif

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">الاسم</span>
					<input class="input100" type="text" name="name" placeholder="ادخل الاسم رباعي" value='{{old("name")}}' required>
					<span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">تاريخ الميلاد</span>
					<input class="input100" type="date" name="date" placeholder="ادخل  تاريخ الميلاد " value='{{old("date")}}' required>
					<span class="focus-input100"></span>
					@error('date')
                       <span style='color:red'>السن غير مسموح</span>
                     @enderror
				</div>

				<div class="wrap-input100 validate-input" data-validate = "ادخل الرقم الصحيح">
					<span class="label-input100">الرقم القومي</span>
					<input class="input100" type="text" name="n_id" placeholder="ادخل الرقم القومي" value='{{old("n_id")}}' required>
					<span class="focus-input100"></span>
					@error('n_id')
                       <span style='color:red'>  هذا الرقم غير صحيح او موجود بالفعل</span>
                     @enderror
				</div>
				<div class="wrap-input100 validate-input" data-validate = "ادخل الرقم الصحيح" >
					<span class="label-input100">رقم التليفون</span>
					<input class="input100" type="text" name="phone" placeholder="ادخل  رقم الهاتف" value='{{old("phone")}}' required>
					<span class="focus-input100"></span>
					@error('phone')
                       <span style='color:red'>  رقم هاتف غير صحيح لازم يكون 11 رقم </span>
                     @enderror
				</div>
				<div class="wrap-input100 validate-input" data-validate = "ادخل الرقم الصحيح">
					<span class="label-input100">المؤهل </span>
					<input class="input100" type="text" name="qualification" placeholder="ادخل المؤهل  " value='{{old("qualification")}}' required>
					<span class="focus-input100"></span>
					@error('qualification')
                       <span style='color:red'>{{ $message }}</span>
                     @enderror
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">نوع الاعاقه</span>
					<div>
						<select class="selection-2" name="disability" required>
						
						<option disabled> اختار نوع الاعاقة</option>
							<option>سمعي</option>
							<option>بصري </option>
							<option> حركي</option>
							
						</select>
						@error('disability')
                       <span style='color:red'>{{ $message }}</span>
                     @enderror
					</div>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 input100-select">
					<span class="label-input100">المنحة</span>
					<div style="width:20%">
						<select class="selection-2" name="type"  required>
						
						<option disabled> اختار المنحة</option>
							<option>وزارة الاتصالات</option>
							<option>هيئة التسليح </option>
							
							
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
						<select   class="selection-2" name="courses[]" multiple required>
							<option disabled> اختار الشهادات</option>
                            @foreach($courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
							
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit">
							<span>
								ادخال
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
