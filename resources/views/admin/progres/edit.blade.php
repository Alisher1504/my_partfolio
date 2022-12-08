@extends('layouts.adminfront')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">

                    <div class="card-body">

                        <form action="{{ url('admin/progresupdate/'. $prog->id) }}" method="POST">

                            @csrf
                            @method('PUT')
                            <input type="text" name="prog_name" class="form-control" value="{{ $prog->prog_name }}">
                            <input type="text" name="prog_foiz" class="form-control mt-2" value="{{ $prog->prog_foiz }}">
                            <input type="text" name="prog" class="form-control mt-2" value="{{ $prog->prog }}">

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection
