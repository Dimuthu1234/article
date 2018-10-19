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
        <div class="col-md-12" style="height: 500px; overflow: scroll">
            {!! Form::open(['files' => true, 'route' => 'article.store', 'class' => 'form-horizontal', 'method' => 'POST']) !!}

            {{--<form class="form-horizontal" method="POST" action="{{ route('article.store') }}">--}}
            {{--{{ csrf_field() }}--}}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <div class="form-group">
                {{--<label for="name" class="col-md-3 control-label">Some text</label>--}}

                <div class="col-md-12">
                    <textarea id="summernote" class="form-control" name="description"
                              required>This is Content Editor</textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-3 control-label">Title</label>

                <div class="col-md-7">
                    <input id="name" type="text" class="form-control" name="title" required>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-3 control-label">Thumbnail</label>

                <div class="col-md-7">
                    <input type='file' name="thumbnail" onchange="readURL(this);"/>
                    <img id="blah" style="margin-top: 2%; width: 180px; height: 180px" src="http://placehold.it/180"
                         alt="your image"/>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-3 control-label">Image</label>

                <div class="col-md-7">
                    <input type='file' name="image" onchange="readURL2(this);"/>
                    <img id="blah2" style="margin-top: 2%; width: 180px; height: 180px" src="http://placehold.it/180"
                         alt="your image"/>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-3 control-label" style="margin-top: 2%">Is Enable</label>

                <div class="col-md-7">
                    <label class="switch">
                        <input type="checkbox" name="is_enable" value="1">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-3 control-label">Meta description</label>

                <div class="col-md-7">
                    <textarea class="form-control" name="meta_description" required></textarea>

                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-md-3 control-label">Meta Keywords</label>

                <div class="col-md-7">
                    {!! Form::select('meta_keyword_list[]', $metaKeywordList, null, ['id' => 'meta_keyword_list', 'class' => 'form-control', 'multiple']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-3 control-label">Short description</label>

                <div class="col-md-7">
                    <textarea class="form-control" name="short_description" required></textarea>

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary pull-right">
                        Save
                    </button>
                </div>
            </div>
            {!! Form::close() !!}

            {{--</form>--}}
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        $(function () {
            $('#meta_keyword_list').select2({
                placeholder: 'Choose Meta Keywords',
                tags: true
            });
        });
    </script>
@endpush
