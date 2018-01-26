@extends('pages::layouts.master')
@section('title', ''. $pages->title.'' )

@section('page-content')

    <div class="card card-outline-secondary my-4">
        <div class="card-header">
            <h3>{{ $pages->title }}</h3>
        </div>
        <div class="card-body">
          <p> {!! $pages->content_text !!}</p>
        </div>
    </div>
@endsection