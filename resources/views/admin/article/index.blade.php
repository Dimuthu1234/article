@extends('layouts.admin')

@push('styles')
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@section('title-content', 'ALL ARTICLES')

@section('admin-content')

    @include('shared._sessionmessage')

    <div class="row" style="margin-top: 2%">
        <div class="col-md-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Article</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8">
            <a href="{{ route('article.create') }}" class="pull-right add-button">
                <button>Add Article</button>
            </a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-responsive" id="myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Thumbnail</th>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th>Is Enable</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td><img class="img-list" src="{{asset('images/article/thumbnail/'.$article->thumbnail)}}"></td>
                    <td>{{ $article->title }}</td>
                    <td>{{ str_limit($article->short_description, 150) }}</td>
                    <td>@if($article->is_enable == 1 )<i class="fa fa-check" style="color: green"></i> @else <i class="fa fa-times" style="color: red"></i> @endif</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush