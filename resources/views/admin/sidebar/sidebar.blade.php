@extends('layouts.adminfront')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">

                    <div class="card-body">

                        <form action="{{ Route('create-sidebar') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <input type="file" name="image" class="form-control">
                            <input type="text" name="name" class="form-control mt-2">

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

                        </form>

                    </div>

                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sidebar as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td><img style="width: 120px" src="{{ asset('assets/uploads/sidebar/'. $item->image) }}" alt=""></td>
                                        <td>
                                            <a href="{{ url('admin/editsidebar/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/deletesidebar/' .$item->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection
