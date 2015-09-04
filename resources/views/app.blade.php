<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="/favicon.png">
	<title>猎来网</title>
        
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        
        <!-- Scripts -->
	<script src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>

</head>
<body>
	<nav class="navbar navbar-default header-navibar">
		<div class="container-fluid">
                    <div class="row-fluid">
                        <div class="navbar-header span2">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">猎来网</a>
			</div>

			<div class="span10 offset2 collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">首页</a></li>
                                        <li><a href="{{ url('/') }}">工作机会</a></li>
                                        <li><a href="{{ url('/') }}">技术分享</a></li>
                                        <li><a href="{{ url('/') }}">讲师阵容</a></li>
                                        <li><a href="{{ url('/') }}">沙龙活动</a></li>
                                        <li><a href="{{ url('/') }}">职场成长</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">登录</a></li>
						<li><a href="{{ url('/auth/register') }}">注册</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">登出</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
                    </div>
		</div>
	</nav>
        
        <div class="content-wrapper" class="gray-bg">
	@yield('content')
        <!-- footer-->
        <div class="footer">
		<div class="wrapper">
		    <a href="#" target="_blank" rel="nofollow">帮助中心</a>
                    <a href="#" class="fa fa-wechat" data-toggle="modal" data-target="#wc_modal">敬请关注微信公众号ihuntu</a>
                    
                    <a href="#" target="mailto: tina@ihuntu.com" rel="nofollow">联系我们：tina@ihuntu.com</a>
                    <div class="copyright">
                            <span>©2015 猎来</span>
                            <a target="_blank" href="#" rel="nofollow">沪ICP备15014152号</a>
                            <span></span>
                    </div>
		</div>
	</div>
        
        <div class="modal inmodal fade" id="wc_modal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">请用微信扫描我们的二维码</h4>
                    </div>
                    <div class="modal-body">
                       <img class="alignnone size-medium wp-image-134" 
                            src="img/wc_public_qrcode.jpg"  width="240" height="240">
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        
        
</body>
</html>
