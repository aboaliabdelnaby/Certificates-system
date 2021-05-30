@extends('layout.index')
@section('body')

<div Class="ekrar">

<p>أقر انا</p>

					<p> 

                   {{$student->name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ورقمي القومي هو&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  {{$student->n_id}}
                    
                    
                    </p>
<p>  انني قد استلمت اصل شهادات :
</p>
@php 
                            $i=0;
                            @endphp
							@foreach($student->courses as $course)
                            @if($course->pivot->status=='Delivered')
                            {{$course->name}}
                            
                          
                            
                            @endif

                            @php
                                  $i++
                                  @endphp
                                  @endforeach
<p> وذلك بتوقيت  {{date('Y-m-d H:i:s')}} </p>
<p>ولن يحق لي مطالبة مركز تأهيل الحاسبات القوات المسلحة بها مرة اخري</p>
<br><br><br>
<p>وهذا اقرار مني بذلك</p>
<p>...............................................</p>
</div>
<div class="btns">
<i style="cursor:pointer;font-size:75px;color:#FFF;position:absolute;right: 0;margin-right: 30px;margin-top:200px;" onClick="window.print()" class=" fa fa-print"></i>
</div>