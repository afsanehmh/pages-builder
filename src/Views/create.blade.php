@extends('pages::layouts.master')
@section('page-title')
create page
@endsection
@section('page-details','')
@section('style')
@endsection
@section('breadcrumb')

<li>
  <a href="{{ url('/page') }}">manage page</a>
</li>


<li class="active">
  create page
</li>
@endsection
@section('page-content')
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-tools">
        <a class="btn btn-success btn-sm" style="margin-top: -4px;" href="{{ url('/page') }}">manage page</a>
      </div>
    </div>
    <div class="panel-body">
      <form role="form" class="form-horizontal" method="POST" action="{{ url('/page/store') }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
          <label class="col-sm-2 control-label" for="title">
            title page
          </label>
          <div class="col-sm-7">
            <input class="form-control" tabindex="1" name="title" id="title-fa" maxlength="128" type="text" required value="{{ old('title') }}">
            <span class="help-block{{ $errors->has('title') ? ' has-error' : '' }}">{{ $errors->first('title') }}</span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="long-text">content text</label>
          <div class="col-sm-9">
            <textarea class="form-control" id="content_text" name="content_text" rows="20"></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-7">
            <button type="submit" tabindex="6" class="btn btn-info btn-md">submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection


@section('javascript-link')
  <script>
      CKEDITOR.replace( 'content_text' );
  </script>
@endsection

@section('javascript-code')

@endsection
