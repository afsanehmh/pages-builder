@extends('pages::layouts.master')
@section('page-title')
  manage page
@endsection
@section('page-details','')
@section('style')
@endsection
@section('page-content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-tools">
                <a class="btn btn-success btn-sm" style="margin-top: -4px;" href="{{ url('page/create') }}">create page</a>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table-bordered table-hover table-full-width" id="data-table">
                <thead>
                <tr>
                    <th>row</th>
                    <th>title page</th>
                    <th class="hidden-xs">link page</th>
                    <th class="hidden-xs">visits</th>
                    <th class="hidden-xs">data & time (persian)</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $index=> $page)
                    <tr>
                        <td>{{ ++ $index }}</td>
                        <td class="hidden-xs">{{ $page->title }}</td>
                        <td class="hidden-xs"><a target="_blank" href="{{ $page->url()}}"> {{ $page->url()}}</a></td>
                        <td class="hidden-xs">{{ $page->visits }}</td>
                        <td class="hidden-xs">{{ $page->createdAt()}}</td>
                        <td>
                            <a class="btn btn-green btn-sm" href="{{ url('page/'.$page->id.'/edit') }}"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a class="btn btn-red btn-sm" href="{{ url('page/'.$page->id.'/delete') }}"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('javascript-link')

@endsection
@section('document-ready')

@endsection
