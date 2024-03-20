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
                    <form action="{{ route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <textarea class="form-control" rows="3" name="name" id="productName" placeholder="Enter product name ...">{{ $product->name }}</textarea>
                                @error('name')
                                <span class="error_message" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Purchase Price</label>
                                        <input type="number" class="form-control" value="{{ $product->purchase_price }}" name="purchase_price" placeholder="Enter purchase price...">
                                        @error('purchase_price')
                                        <span class="error_message" role="alert">
                                            <strong>{{ $errors->first('purchase_price') }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Selling Price</label>
                                        <input type="number" class="form-control" name="selling_price" placeholder="Enter selling price..." value="{{ $product->selling_price }}">
                                        @error('selling_price')
                                        <span class="error_message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="number" class="form-control" value="{{ $product->qty }}" name="qty" placeholder="Enter quantity...">
                                        @error('qty')
                                        <span class="error_message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Product Code</label>
                                        <input type="text" class="form-control" value="{{ $product->code }}" name="code" placeholder="Enter product code...">
                                        @error('code')
                                        <span class="error_message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Select Tags</label>
                                        <select class="select2" multiple="multiple" name="tag[]" data-placeholder="Select a State" style="width: 100%;">
                                            <option value="">Select Tag</option>
                                            @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}" @if(in_array($tag->id, $product->tags->pluck('id')->toArray())) selected @endif>{{ $tag->tag_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('tag')
                                        <span class="error_message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Select Category</label>
                                        <select class="form-control select2" name="category_id" style="width: 100%;">
                                            <option value="">select category</option>
                                            @foreach($categories as $category)
                                            <option {{ $product->category_id == $category->id ? 'selected' :''}} value="{{$category->id}}">{{$category->cat_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="error_message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Select Rating</label>
                                        <select class="form-control select2" name="rating" style="width: 100%;">
                                            <option {{ $product->rating == 1 ? 'selected' :''}} value="1">1</option>
                                            <option {{ $product->rating == 2 ? 'selected' :''}} value="2">2</option>
                                            <option {{ $product->rating == 3 ? 'selected' :''}} value="3">3</option>
                                            <option {{ $product->rating == 3 ? 'selected' :''}} value="4">4</option>
                                            <option {{ $product->rating == 4 ? 'selected' :''}} value="5">5</option>
                                        </select>
                                        @error('rating')
                                        <span class="error_message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" multiple="multiple" class="form-control" name="images[]" placeholder="Enter images...">
                                        @error('images')
                                        <span class="error_message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div>
                                        @foreach($product->images as $image)
                                        <img src="{{ asset('images/' . $image) }}" style="width: 50px; height:50px;" />
                                        @endforeach

                                    </div>

                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="summernote" name="description">
                                        {{ $product->description }}
                                        </textarea>
                                        @error('description')
                                        <span class="error_message" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">update</button>
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