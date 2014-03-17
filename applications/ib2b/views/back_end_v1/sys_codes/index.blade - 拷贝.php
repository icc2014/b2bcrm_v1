@extends('back_end_v1.sys_layouts.main')

@section('navigation')
<ul class="breadcrumb">
 <li><i class="fa fa-home"></i><a href="{{url('/main')}}"> B2B-iCRM</a></li>
 <li>系统首页</li>
</ul>
<div class="clearfix">
    <h3 class="content-title pull-left">{{$welcome}}</h3>
</div>
@endsection
@section('content')
<div class="row">
  
   
	

  <h5>发文章</h5>
	{{ Form::open(array('url'=>'codes/add')) }}

		
		<!-- title field -->
		<p>{{ Form::label('title', '标题') }}</p>
		<p>{{ Form::text('title', Input::old('title'))}}</p>
		<!-- submit button -->
		<p>{{ Form::submit('发表') }}</p>

	{{ Form::close() }}
</div>


@endsection
@section('css')
@endsection
@section('js')
@endsection