@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">公司</div>

        <div class="panel-body">
          <a href="{{ URL('admin/companies/create') }}" class="btn btn-lg btn-primary">新增公司</a>  
          <div class="list-group">
          @foreach ($cmps as $cmp)
            <hr>
            <div class="company">
              <h4>{{ $cmp->title }}</h4>
              <div class="description">
                <p>
                  {{ $cmp->description }}
                </p>
              </div>
              <div class="address">
                <p>
                  {{ $cmp->address }}
                </p>
              </div>
            </div>
            <div class='company-editor-wrap'>
            <div class='jobs '></div>    
            <a href="{{ URL('admin/companies/'.$cmp->id.'/edit') }}" class="btn btn-success">编辑</a>

            <form action="{{ URL('admin/companies/'.$cmp->id) }}" method="POST" style="display: inline;">
              <input name="_method" type="hidden" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-danger">删除</button>
            </form>
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection