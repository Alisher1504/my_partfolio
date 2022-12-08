@extends('layouts.adminfront')

@section('content')
    <main id="main" class="main">

        @if (session('status'))
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card bg-info">
                        <div class="card-body text-center text-white">
                            <h1>{{ session('status') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">

                    <div class="card-body">

                        <form action="{{ route('progrescreates') }}" method="POST">

                            @csrf

                            <input type="text" name="prog_name" class="form-control" placeholder="prog_name">
                            <input type="text" name="prog_foiz" class="form-control mt-2" placeholder="prog_foiz">
                            <input type="text" name="prog" class="form-control mt-2" placeholder="prog">

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

                        </form>

                    </div>

                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col">

                <div class="card">

                    <div class="card-body">
                        <table class="table">
                            <thead>

                                <tr>
                                    <th>#</th>
                                    <th>prog_name</th>
                                    <th>prog_foiz</th>
                                    <th>prog</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prog as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->prog_name }}</td>
                                        <td>{{ $item->prog_foiz }}</td>
                                        <td>{{ $item->prog }}</td>
                                        <td>
                                            <a href="{{ url('admin/editprog/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/deleteprog/' .$item->id) }}" class="btn btn-danger">Delete</a>
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
