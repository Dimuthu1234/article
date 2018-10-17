@extends('layouts.admin')

@section('title-content', 'ALL ARTICLES')

@section('admin-content')
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
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Thumbnail</th>
                    <th>Title</th>
                    <th>Enable</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>kygkk</td>
                    <td>egrg</td>
                    <td>grger</td>
                    <td>egtr</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection