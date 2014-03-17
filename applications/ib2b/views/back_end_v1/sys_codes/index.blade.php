@extends('back_end_v1.sys_layouts.main')

@section('navigation')
<ul class="breadcrumb">
 <li><i class="fa fa-home"></i><a href="{{url('/main')}}"> B2B-iCRM</a></li>
 <li>应用业务</li>
 <li>CODE</li>
</ul>
<div class="clearfix">
    <h3 class="content-title pull-left">{{$welcome}}</h3>
</div>
@endsection
@section('content')
<!--CREATE CODE-->
<div class="col-md-8">
	<div class="box border">
        <div class="box-title">
            <h4><i class="fa fa-file-text"></i>生成CODE</h4>
            <div class="tools">
            	<a href="javascript:;">
                   <i class="fa fa-list"></i> CODE列表
                </a>
                <a href="javascript:;" class="collapse">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <form name="createCodesForm">
              <table width="100%" border="0" cellspacing="3" cellpadding="3">
                <tr>
                  <td width="11%" height="40"><strong>类型：</strong></td>
                  <td width="89%">
                  <input type="radio" name="ntype" id="ntype" value="1" checked> 序列号
                  </td>
                </tr>
                  <tr>
                    <td height="40"><strong>项目：</strong></td>
                    <td>
                   		<select name="bu_id" id="buid" class="dselect">
                        	<option value="">请选择用户</option>
                        	@foreach ($projectList as $pl)
                        	<option value="<?php echo $pl->pid;?>"><?php echo $pl->name_cn?></option>
                            @endforeach
                      	</select>
                       
                    </td>
                  </tr>
                  <tr>
                    <td height="40"><strong>礼品：</strong></td>
                    <td>
                    <select name="bu_id" id="buid" class="dselect">
                        <option value="">请选择用户</option>
                        @foreach ($projectList as $nl)
                        <option value="<?php echo $nl->pid;?>"><?php echo $nl->name_cn?></option>
                        @endforeach
                    </select>
                    </td>
                  </tr>
                  <tr>
                    <td height="40"><strong>张数：</strong></td>
                    <td><input name="number" type="text" class="input" id="number" value="10000" maxlength="5">
                      (每次最大数一万张)</td>
                  </tr>
                  <tr>
                    <td height="40"><strong>应用：</strong></td>
                    <td><input type="radio" name="appto" id="appto" value="1" checked> 微信</td>
                </tr>
                  <tr class="no_border_table">
                    <td width="11%" height="50">&nbsp;</td>
                    <td width="89%"><button data-url="{{url('/codes/create')}}" id="btn_codes" class="btn btn-inverse" type="button"> 提交 </button></td>
                  </tr>
                </table>
             </form>
        </div>
    </div>
</div>
<!--END CREATE CODE-->
<!--CODE LOG-->
<div class="col-md-4">
	<!-- BOX -->
    <div class="box border">
        <div class="box-title">
            <h4><i class="fa fa-bars"></i>历史记录</h4>
            <div class="tools">
               
                <a href="javascript:;" data-pm-id="{{$adminId}}" class="codes_reload">
                    <i class="fa fa-refresh"></i>
                </a>
                <a href="javascript:;" class="collapse">
                    <i class="fa fa-chevron-up"></i>
                </a>
                
            </div>
        </div>
        <div class="box-body">
            <div class="panel-group" id="accordion">
              
              
              <div class="panel panel-default">
                 <div class="panel-heading">
                    <h3 class="panel-title"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2014/03/12 来伊份 [90000]</a> </h3>
                 </div>
                 <div style="height: auto;" id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body"> s </div>
                 </div>
              </div>
              
              
              <div class="panel panel-default">
                 <div class="panel-heading">
                    <h3 class="panel-title"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">2014年03月11日</a> </h3>
                 </div>
                 <div style="height: 0px;" id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body"> s </div>
                 </div>
              </div>
              
              
              
              
              
              
              
              <div class="panel panel-default">
                 <div class="panel-heading">
                    <h3 class="panel-title"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">2014年03月10日 </a> </h3>
                 </div>
                 <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body"> s </div>
                 </div>
              </div>
              
              
              
           </div>
        </div>
    </div>
    <!-- /BOX -->
</div>
<!--CODE LOG END-->
@endsection
@section('css')
@endsection
@section('js')
<script src="{{ asset('/themes/js/codes.js') }}"></script>
@endsection