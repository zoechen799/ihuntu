@extends('app')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight jd-detail">
    <div class="row">
        <div class="col-lg-8">
            <div class="widget-head-color-box navy-bg p-lg text-center">
                <div class="m-b-md">
                <h2 class="font-bold no-margins">
                    {{$jd->title}}
                </h2>
                <h3>
                    {{$jd->belongsToCompany->title}}
                </h3>
                    
                </div>
                <div class="row">
                    <div class='col-lg-2'>
                       <h3><i class="fa fa-map-marker"></i>{{$jd->belongsToCity->name}}</h3>
                    </div>
                    <div class='col-lg-2'>
                       <h3><i class="fa fa-thumbs-up"></i>经验 {{$jd->workyears}}年以上</h3>
                    </div>
                    <div class='col-lg-2'>
                       <h3><i class="fa fa-graduation-cap"></i>{{$jd->belongsToDegree->name}}及以上</h3>
                    </div>
                    <div class='col-lg-2'>
                        <h3><i class="fa fa-trophy"></i> {{$jd->minsalary}}万 - {{$jd->maxsalary}}万</h3> 
                    </div>
                    <div class='col-lg-2'>
                        <h3><i class="fa fa-birthday-cake"></i> {{$jd->agestart}} - {{$jd->ageend}}</h3> 
                    </div>
                    <span class="col-jobcatrgory">
                        {{$jd->belongsToCategory->name}}
                    </span>
                </div>
                <div>
                    <span>{{$visited}} 人看过</span> |
                    <span>{{$like}} 喜欢</span>
                </div>
            </div>
            <div class="widget-text-box">
                <h4 class="media-heading">职位描述</h4>
                <p>{{$jd->responsibility}}</p>
                <div class="text-right">
                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> 喜欢 </a>
                </div>
            </div>
            <div class="widget-text-box">
                <h4 class='media-heading'>任职要求</h4>
                <p>{{$jd->requirement}}</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins jd-company">
                        <div class="ibox-title">
                            <h5>{{$jd->belongsToCompany->title}}</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="jd-company-image" src="{{asset('img/default-company-logo.jpg')}}">
                            </div>
                            <div class="ibox-content profile-content">
                                <p><i class="fa fa-map-marker"></i>{{$jd->belongsToCompany->address}}</p>
                                <h5>
                                    公司简介
                                </h5>
                                <p>
                                    {{$jd->belongsToCompany->description}}
                                </p>
                                <div class="row m-t-lg">
                                    <div class="col-md-4">
                                        <h5><strong>169</strong> 跟帖</h5>
                                    </div>
                                    <div class="col-md-4 col-md-offset-3">
                                        <h5><strong>28</strong> 关注</h5>
                                    </div>
                                </div>
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary btn-sm btn-block">
                                                <i class="fa fa-envelope"></i> 投个简历</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-default btn-sm btn-block">
                                                <i class="fa fa-coffee"></i> 专业咨询</button>
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