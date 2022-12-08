@extends('layouts.adminfront')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">

                    <div class="card-body">

                        <form action="{{ url('admin/updatecategory/'.$data->id) }}" method="POST">

                            @csrf
                            @method('PUT')
                            <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                            <input type="text" name="link" class="form-control mt-2" value="{{ $data->link }}">

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection
