@extends('pages::layouts.master')
@section('page-title')
edit page
@endsection
@section('page-details','')
@section('breadcrumb')
  <li>
    <a href="{{ url('/page') }}">manage page</a>
  </li>
  <li class="active">
    edit page
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
      <form role="form" class="form-horizontal" method="POST" action="{{ url('/page/update') }}">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <input type="hidden" name="id" value="{{ $page->id }}">
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
          <label class="col-sm-2 control-label" for="title">
            title page
          </label>
          <div class="col-sm-7">
            <input class="form-control"
                   name="title" id="title-fa" maxlength="128" type="text" required value="{{ $page->title }}">
            <span class="help-block{{ $errors->has('title') ? ' has-error' : '' }}">{{ $errors->first('title') }}</span>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label" for="long-text">content text</label>
          <div class="col-sm-9">
            <textarea class="form-control" id="content_text" name="content_text" rows="20">{{ $page->content_text }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-7">
            <button type="submit" tabindex="6" class="btn btn-info btn-md">update</button>
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