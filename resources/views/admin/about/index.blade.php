@extends('layouts.adminfront')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">

                    <div class="card-body">

                        <form action="{{ route('aboutcreates') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <input type="text" name="about_title" class="form-control" placeholder="about_title">
                            <input type="file" name="image" class="form-control mt-2">
                            <textarea name="about_description" id="" cols="30" rows="5" class="form-control mt-2" placeholder="about_description"></textarea>
                            <input type="text" name="skilles_title" class="form-control mt-2" placeholder="skilles_title">
                            <textarea name="skilles_description" id="" cols="30" rows="5" class="form-control mt-2" placeholder="skilles_description"></textarea>
                            <input type="text" name="brithday" class="form-control mt-2" placeholder="brithday">
                            <input type="text" name="website" class="form-control mt-2" placeholder="website">
                            <input type="number" name="phone" class="form-control mt-2" placeholder="phone">
                            <input type="text" name="city" class="form-control mt-2" placeholder="city">
                            <input type="number" name="age" class="form-control mt-2" placeholder="age">
                            <input type="text" name="degree" class="form-control mt-2" placeholder="degree">
                            <input type="email" name="email" class="form-control mt-2" placeholder="email">
                            <input type="text" name="freelance" class="form-control mt-2" placeholder="freelance">
                            <textarea name="big_description" id="" cols="30" rows="5" class="form-control mt-2" placeholder="big_description"></textarea>

                            <input type="text" name="facts" class="form-control mt-2" placeholder="facts">
                            <textarea name="facts_description" id="" cols="30" rows="5" class="form-control mt-2" placeholder="facts_description"></textarea>

                            <input type="number" name="happy_clients" class="form-control mt-2" placeholder="happy_clients">
                            <input type="number" name="projecs" class="form-control mt-2" placeholder="projecs">
                            <input type="number" name="hours_of_support" class="form-control mt-2" placeholder="hours_of_support">
                            <input type="number" name="team" class="form-control mt-2" placeholder="team">
                            <input type="text" name="skills" class="form-control mt-2" placeholder="skills">
                            <textarea name="skills_description" id="" cols="30" rows="5" class="form-control mt-2" placeholder="skills_description"></textarea>
                            <input type="text" name="name" class="form-control mt-2" placeholder="name">
                            <textarea name="name_description" id="" cols="30" rows="5" class="form-control mt-2" placeholder="name_description"></textarea>

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
                                    <th>about_title</th>
                                    <th>about_description</th>
                                    <th>image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    {{-- <th>skilles_title</th> --}}
                                    {{-- <th>skilles_d</th>
                                    <th>brith</th>
                                    <th>web</th>
                                    <th>phone</th>
                                    <th>city</th>
                                    <th>age</th>
                                    <th>deg</th>
                                    <th>email</th>
                                    <th>fre</th>
                                    <th>big_d</th>
                                    <th>facts</th>
                                    <th>facts_d</th>
                                    <th>happy_c</th>
                                    <th>projecs</th>
                                    <th>hours</th>
                                    <th>team</th>
                                    <th>Edit</th>
                                    <th>Delete</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($about as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->about_title }}</td>
                                        <td>{{ $item->about_description }}</td>
                                        <td><img width="120px" src="{{ asset('assets/uploads/about/'. $item->image) }}" alt=""></td>
                                        <td>
                                            <a href="{{ url('admin/editabout/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/aboutdelete/' .$item->id) }}" class="btn btn-danger">Delete</a>
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
