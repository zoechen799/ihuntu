@extends('app')

@section('content')
<div class="edit-company-container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">公司信息</div>

        <div class="panel-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ URL('admin/companies/'.$company->id) }}" method="POST">
            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="title" class="form-control" 
                   required="required" value="{{ $company->title }}">
            <br>
            <label>公司规模</label>
            <input type="hidden" class="companysize" name="companysize" required="required"
                   value="{{ $company->company_size_id}}"></input>
            <div class="dropdown company-size-dropdown">
                <button class="btn1 btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="textlabel">{{$companysize[$company->company_size_id -1]->name}}</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdownMenu1" aria-labelledby="dropdownMenu1" >
                    @foreach ($companysize as $item)
                    <li><a href="#" data-size-id={{$item->id}}>{{$item->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <br>
            <label>公司性质</label>
            <input type="hidden" class="companynature" name="companynature" required="required"
                   value="{{ $company->company_type_id}}"></input>
            <div class="dropdown company-nature-dropdown">
                <button class="btn2 btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="textlabel">{{$companynature[$company->company_type_id -1]->name}}</span>
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
            <textarea name="description" rows="10" class="form-control" required="required">{{ $company->description }}</textarea>
            <br>
            <label>公司地址</label>
            <input type="text" name="address" class="form-control" 
                   required="required" value="{{ $company->address }}">
            <br>
            <button class="btn btn-lg btn-info">保存</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $('.edit-company-container .dropdownMenu1 li a').click(function(){
         $(".edit-company-container .btn1:first-child .textlabel").text($(this).text() );
         var companySize = $(this).attr('data-size-id');
         $('.edit-company-container .companysize').val(companySize);
    });
    
    $('.edit-company-container .dropdownMenu2 li a').click(function(){
         $(".edit-company-container .btn2:first-child .textlabel").text($(this).text() );
         var companyNature = $(this).attr('data-nature-id');
         $('.edit-company-container .companynature').val(companyNature);
    });
</script>
@endsection