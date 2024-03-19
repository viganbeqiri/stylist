@extends('backend.layouts.app')
@section('backend_css')
<link rel="stylesheet" href="/backend/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/backend/plugins/summernote/summernote-bs4.min.css">

<style type="text/css">
    .error_message {
        color: red;
        font-size: small;
    }

    .success_message {
        background: green;
        margin: 20px 20px 20px 0px;
        padding: 5px;
        color: white;
        border-radius: 12px;
        text-align: center;
    }
</style>
@endsection
@section('backend_content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Tag</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Tag</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <form action="{{ route('tag.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tag_name">Tag Name</label>
                                <textarea class="form-control" rows="3" name="tag_name" id="tag_name" placeholder="Enter tag name ..."></textarea>
                                @error('tag_name')
                                <span class="error_message" role="alert">
                                    <strong>{{ $errors->first('tag_name') }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('backend_js')

<script src="/backend/plugins/select2/js/select2.full.min.js"></script>
<script src="/backend/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
        $('#summernote').summernote();
    })
</script>
@endsection