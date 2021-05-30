@extends('layout.index')
@push("css-style")
<link rel="stylesheet" type="text/css" href="{{asset('../css/forms-new.css')}}">
@endpush
@section('body')




	<div class="container " style="margin-top:5%">
    <div  class="fax-login">
    <form  method='post' action="{{url('login/store')}}">
	@csrf
      <h3>تسجيل الدخول</h3>
	  @if(session('error'))
                <div class='alert alert-danger text-center'>{{session('error')}}</div>
                @endif
      <input type="text" name="name" id="name"  required value='{{old("name")}}' />
	  @error('name')
                 <span style='color:red'>{{ $message }}</span>
       @enderror


      <input type="password" id="password"  name="password" placeholder="  ادخل كلمة السر" required />
	  @error('password')
                       <span style='color:red'>{{ $message }}</span>
                     @enderror
      <button type="submit"  class="login">تسجيل دخول</button>
      <p> منظومة الشهادات</p>
      <div class="socialMedia">
        
       
        <button class="sn">C<img src="" alt="" /></button>
        <button class="sn">Q<img src="" alt="" /></button>
        <button class="sn">C<img src="" alt="" /></button>
		
      </div>
      
    </form>
</div>
  </div>
  @endsection