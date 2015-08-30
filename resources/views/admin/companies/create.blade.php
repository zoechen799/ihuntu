@extends('app')

@section('content')
<div class="container create-company-container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">公司信息</div>

        <div class="panel-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> 您的输入有误,请验证后输入.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ URL('admin/companies') }}" method="POST">
            <label>公司名称</label><input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="title" class="form-control" required="required">
            <br>
            <label>公司规模</label>
            <input type="hidden" class="companysize" name="companysize" required="required"></input>
            <div class="dropdown company-size-dropdown">
                <button class="btn1 btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="textlabel">选择公司规模</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdownMenu1" aria-labelledby="dropdownMenu1">
                    @foreach ($companysize as $item)
                    <li><a href="#" data-size-id={{$item->id}}>{{$item->name}}</a></li>
                    @endforeach
                </ul>
            </div>    
            <br>
            <label>公司性质</label>
            <input type="hidden" class="companynature" name="companynature" required="required"></input>
            <div class="dropdown company-nature-dropdown">
                <button class="btn2 btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="textlabel">选择公司性质</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdownMenu2" aria-labelledby="dropdownMenu2">
                    @foreach ($companynature as $item)
                    <li><a href="#" data-nature-id={{$item->id}}>{{$item->name}}</a></li>
                    @endforeach
                </ul>
            </div> 
            <br>
            <label>公司描述</label>
            <textarea name="description" rows="10" class="form-control" required="required"></textarea>
            <br>
            <label>公司地址</label>
            <input type="text" name="address" class="form-control" required="required">
            <br>
            <button class="btn btn-lg btn-info">新增公司</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $('.create-company-container .dropdownMenu1 li a').click(function(){
         $(".create-company-container .btn1:first-child .textlabel").text($(this).text() );
         var companySize = $(this).attr('data-size-id');
         $('.create-company-container .companysize').val(companySize);
    });
    
    $('.create-company-container .dropdownMenu2 li a').click(function(){
         $(".create-company-container .btn2:first-child .textlabel").text($(this).text() );
         var companyNature = $(this).attr('data-nature-id');
         $('.create-company-container .companynature').val(companyNature);
    });
</script>
@endsection