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
            
            <div class="col-md-112">
                <div class="box border">
                    <div class="box-title">
                        <h4><i class="fa fa-bar-chart-o"></i><span class="hidden-inline-mobile">项目统计</span></h4>
                    </div>
                    <div class="box-body">
                        <div class="tabbable header-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#sales" data-toggle="tab"><i class="fa fa-bookmark"></i> <span class="hidden-inline-mobile">项目进度</span></a></li>
                            </ul>
                            <div class="tab-content">
                            <div class="tab-pane active" id="sales">
                                <div class="panel panel-default">
                                    <div class="panel-body orders no-opaque">
                                    <div class="scroller" data-height="550px" data-always-visible="1" data-rail-visible="1">
                                        <ul class="list-unstyled">
                                                <li class="clearfix">
                                                        <div class="pull-left">
                                                            <p><h5><strong>#g20130989</strong> 项目名称</h5></p>
                                                            <p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="2014/01/02" >2014/01/02</abbr></p>																
                                                        </div>
                                                        <div class="text-right pull-right">
                                                            <h4 class="cost">团队成员：成员名，成员名，成员名，成员名，成员名，成员名</h4>
                                                            <p><span class="label label-success arrow-in-right"><i class="fa fa-check"></i> 完成</span></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="progress progress-sm">
                                                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                            <span class="sr-only">100%</span>
                                                          </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="pull-left">
                                                            <p><h5><strong>#g20130989</strong> 项目名称</h5></p>
                                                            <p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="2014/01/02" >2014/01/02</abbr></p>
                                                        </div>
                                                        <div class="text-right pull-right">
                                                            <h4 class="cost">团队成员：成员名，成员名，成员名，成员名，成员名，成员名</h4>
                                                            <p><span class="label label-warning arrow-in-right"><i class="fa fa-cog"></i> 进行中</span></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="progress progress-sm">
                                                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                                            <span class="sr-only">30% Complete</span>
                                                          </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="pull-left">
                                                            <p><h5><strong>#g20130989</strong> 项目名称</h5></p>
                                                            <p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="2014/01/02" >2014/01/02</abbr></p>
                                                        </div>
                                                        <div class="text-right pull-right">
                                                            <h4 class="cost">团队成员：成员名，成员名，成员名，成员名，成员名，成员名</h4>
                                                            <p><span class="label label-primary arrow-in-right"><i class="fa fa-archive"></i> Archived</span></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="progress progress-sm">
                                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%;">
                                                            <span class="sr-only">97% Complete</span>
                                                          </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="pull-left">
                                                            <p><h5><strong>#g20130989</strong> 项目名称</h5></p>
                                                            <p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="2014/01/02" >2014/01/02</abbr></p>
                                                        </div>
                                                        <div class="text-right pull-right">
                                                            <h4 class="cost">团队成员：成员名，成员名，成员名，成员名，成员名，成员名</h4>
                                                            <p><span class="label label-danger arrow-in-right"><i class="fa fa-star"></i> New</span></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="progress progress-sm">
                                                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                                            <span class="sr-only">10% Complete</span>
                                                          </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="pull-left">
                                                            <p><h5><strong>#g20130989</strong> 项目名称</h5></p>
                                                            <p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="2014/01/02" >2014/01/02</abbr></p>
                                                        </div>
                                                        <div class="text-right pull-right">
                                                            <h4 class="cost">团队成员：成员名，成员名，成员名，成员名，成员名，成员名</h4>
                                                            <p><span class="label label-info arrow-in-right"><i class="fa fa-truck"></i> In Transit</span></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="progress progress-sm">
                                                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                            <span class="sr-only">50% Complete</span>
                                                          </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="pull-left">
                                                            <p><h5><strong>#g20130989</strong> 项目名称</h5></p>
                                                            <p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="2014/01/02" >2014/01/02</abbr></p>				
                                                        </div>
                                                        <div class="text-right pull-right">
                                                            <h4 class="cost">团队成员：成员名，成员名，成员名，成员名，成员名，成员名</h4>
                                                            <p><span class="label label-success arrow-in-right"><i class="fa fa-check"></i> Complete</span></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="progress progress-sm">
                                                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                            <span class="sr-only">80% Complete</span>
                                                          </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="pull-left">
                                                            <p><h5><strong>#g20130989</strong> 项目名称</h5></p>
                                                            <p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="2014/01/02" >2014/01/02</abbr></p>
                                                        </div>
                                                        <div class="text-right pull-right">
                                                            <h4 class="cost">团队成员：成员名，成员名，成员名，成员名，成员名，成员名</h4>
                                                            <p><span class="label label-danger arrow-in-right"><i class="fa fa-star"></i> New</span></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="progress progress-sm">
                                                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                                            <span class="sr-only">20% Complete</span>
                                                          </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="pull-left">
                                                            <p><h5><strong>#g20130989</strong> 项目名称</h5></p>
                                                            <p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="2014/01/02" >2014/01/02</abbr></p>
                                                        </div>
                                                        <div class="text-right pull-right">
                                                            <h4 class="cost">团队成员：成员名，成员名，成员名，成员名，成员名，成员名</h4>
                                                            <p><span class="label label-info arrow-in-right"><i class="fa fa-truck"></i> In Transit</span></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="progress progress-sm">
                                                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                            <span class="sr-only">65% Complete</span>
                                                          </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="pull-left">
                                                            <p><h5><strong>#g20130989</strong> 项目名称</h5></p>
                                                            <p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="2014/01/02" >2014/01/02</abbr></p>
                                                            
                                                        </div>
                                                        <div class="text-right pull-right">
                                                            <h4 class="cost">团队成员：成员名，成员名，成员名，成员名，成员名，成员名</h4>
                                                            <p><span class="label label-warning arrow-in-right"><i class="fa fa-cog"></i> In Progress</span></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="progress progress-sm">
                                                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                            <span class="sr-only">75% Complete</span>
                                                          </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                          </div>
                                        </div>
                                   </div>
                                </div>
                             </div>
                           </div>
                        </div>
             </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection