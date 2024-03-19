@extends('backend.layouts.app')
@section('backend_css')

@endsection
@section('backend_content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Products List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Products List</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>purchase price</th>
                                    <th>Selling Price</th>
                                    <th>Qty</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->purchase_price }}</td>
                                    <td>{{ $product->selling_price }}</td>
                                    <td>{{ $product->qty }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>
                                        @if(isset($product->images[0]))
                                        <img src="{{ asset('images/' . $product->images[0]) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px;">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-info">edit</a>

                                        <a href="{{ route('product.destroy', $product->id) }}" class="btn btn-sm btn-danger">X</a>


                                        @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        {{ $products->links('custom-pagination', ['foo' => 'bar']) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@section('backend_js')

@endsection