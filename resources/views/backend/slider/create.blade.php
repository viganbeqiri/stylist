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
                <h1>Create Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Product</li>
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
                    <form action="{{ route('slider.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <textarea class="form-control" rows="3" name="title" id="title" placeholder="Enter title  ..."></textarea>
                                @error('title')
                                <span class="error_message" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" rows="3" name="description" id="description" placeholder="Enter description ..."></textarea>
                                @error('description')
                                <span class="error_message" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" rows="3" name="image" id="image" placeholder="Enter product name ..." />
                                @error('image')
                                <span class="error_message" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
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