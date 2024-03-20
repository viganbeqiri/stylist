@extends('backend.layouts.app')
@section('backend_css')

@endsection
@section('backend_content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tag List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tag List</li>
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
                                    <th>Created at</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ $tag->tag_name }}</td>
                                    <td>{{ $tag->created_at }}</td>
                                    <td>
                                        <a href="{{ route('tag.destroy', $tag->id) }}" class="btn btn-sm btn-danger">X</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        {{ $tags->links('custom-pagination', ['foo' => 'bar']) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@section('backend_js')

@endsection