@extends('app')

@section('content')
<div class="container">
	<div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @include('categories.list', ['cats' => $jobcategories])
			</div>
                    </div>
                </div>
		<div class="col-md-9">
                    <div class="panel">
                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" placeholder="找工作,找公司..." class="form-control top-search" 
                                   name="top-search">
                            </div>
                            <button type="button" class="col-md-3 btn btn-w-m btn-primary btn-search">搜索</button>
                        </div>
                    </div>
                    
                    <div class="panel">
                        <h3>最新动态</h3>
                       @include('campaigns.carousel', ['jdgroups' => $jdgroups])
                    </div>
                    
                    <div class='panel'>
                        <h3>热门工作</h3>
                        <div clas='panel-body'>
                            @include('jobdescriptions.grid', ['jds' => $jds])
                        </div>
                    </div>    
		</div>
	</div>
</div>
@endsection
