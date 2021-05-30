@extends('layout.index')
@push("css-style")
<link rel="stylesheet" type="text/css" href="{{asset('../css/forms-new.css')}}">
@endpush
@section('body')


<div class="container-contact100">
		<div class="wrap-contact100" style="margin-top:85px">
			
			
			<form class="contact100-form validate-form" method='post' action='{{url("register/update2")}}' enctype="multipart/form-data">
			   @csrf 
				<span class="contact100-form-title">
                    مراجعة المتقدمين

            </span>
				@if(session('success'))
                <div class='alert alert-success text-center'>{{session('success')}}</div>
                @endif

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">الاسم</span>
					<input class="input100" type="text" name="name" placeholder="ادخل الاسم رباعي" value='{{$student->name}}' required>
					<span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">السن</span>
					<input class="input100" type="text" name="age" placeholder="ادخل  السن الصحيح" value='{{$student->age}}' required>
					<span class="focus-input100"></span>
					@error('age')
                       <span style='color:red'>السن غير مسموح</span>
                     @enderror
				</div>
               

				<div class="wrap-input100 validate-input" data-validate = "ادخل الرقم الصحيح">
					<span class="label-input100">الرقم القومي</span>
					<input class="input100" type="text" name="n_id" placeholder="ادخل الرقم القومي" value='{{$student->n_id}}' required>
					<span class="focus-input100"></span>
					@error('n_id')
                       <span style='color:red'> هذا الرقم غير صحيح اوموجود بالفعل</span>
                     @enderror
				</div>


				<div class="wrap-input100 validate-input" data-validate = "ادخل الرقم الصحيح" >
					<span class="label-input100">رقم التليفون</span>
					<input class="input100" type="text" name="phone" placeholder="ادخل  رقم الهاتف" value='{{$student->phone}}' required>
					<span class="focus-input100"></span>
					@error('phone')
                       <span style='color:red'>  رقم هاتف غير صحيح لازم يكون 11 رقم </span>
                     @enderror
				</div>
				
                <div class="wrap-input100 validate-input" data-validate = "ادخل الرقم الصحيح">
					<span class="label-input100">المؤهل </span>
					<input class="input100" type="text" name="qualification" placeholder="ادخل المؤهل  " value='{{$student->qualification}}' required>
					<span class="focus-input100"></span>
					@error('qualification')
                       <span style='color:red'>{{ $message }}</span>
                     @enderror
				</div>


				<input type='hidden' name='id' value='{{$student->id}}'>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">نوع الاعاقه</span>
					<div>
						<select class="selection-2" name="disability" required>
						
						<option disabled> اختار نوع الاعاقة</option>
							<option value='سمعي' @if($student->disability=='سمعي') selected @endif >سمعي</option>
							<option value='بصري' @if($student->disability=='بصري') selected @endif>بصري </option>
							<option value='حركي' @if($student->disability=='حركي') selected @endif> حركي</option>
							
						</select>
						@error('disability')
                       <span style='color:red'>{{ $message }}</span>
                     @enderror
					</div>
					<span class="focus-input100"></span>
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
