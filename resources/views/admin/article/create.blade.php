@extends('layouts.admin')

@section('title-content', 'ADD A ARTICLE')

@section('admin-content')
    <div class="row" style="margin-top: 2%">
        <div class="col-md-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Article</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr>
    <div class="row panel">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="{{ route('article.store') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Title</label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Some text</label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Some text</label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Some text</label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary pull-right">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection