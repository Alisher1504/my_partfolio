@extends('layouts.adminfront')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">

                    <div class="card-body">

                        <form action="{{ url('admin/updatesidebar/'. $data->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            <img src="{{ asset('assets/uploads/sidebar/'.$data->image) }}" alt="">
                            <input type="file" name="image" class="form-control mt-2">
                            <input type="text" name="name" class="form-control mt-2" value="{{ $data->name }}">

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection
