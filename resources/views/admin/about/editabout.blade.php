@extends('layouts.adminfront')

@section('content')
    <main id="main" class="main">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">

                    <div class="card-body">

                        <form action="{{ url('admin/aboutupdate/'.$data->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            <input type="text" name="about_title" class="form-control mb-2" value="{{ $data->about_title }}">
                            <img width="250px" src="{{ asset('assets/uploads/about/'.$data->image) }}" alt="">
                            <input type="file" name="image" class="form-control mt-2">
                            <textarea name="about_description" id="" cols="30" rows="5" class="form-control mt-2">{{ $data->about_description }}</textarea>
                            <input type="text" name="skilles_title" class="form-control mt-2" value="{{ $data->skilles_title }}">
                            <textarea name="skilles_description" id="" cols="30" rows="5" class="form-control mt-2" >{{ $data->skilles_description }}</textarea>
                            <input type="text" name="brithday" class="form-control mt-2" value="{{ $data->brithday }}">
                            <input type="text" name="website" class="form-control mt-2" value="{{ $data->website }}">
                            <input type="number" name="phone" class="form-control mt-2" value="{{ $data->phone }}">
                            <input type="text" name="city" class="form-control mt-2" value="{{ $data->city }}">
                            <input type="number" name="age" class="form-control mt-2" value="{{ $data->age }}">
                            <input type="text" name="degree" class="form-control mt-2" value="{{ $data->degree }}">
                            <input type="email" name="email" class="form-control mt-2" value="{{ $data->email }}">
                            <input type="text" name="freelance" class="form-control mt-2" value="{{ $data->freelance }}">
                            <textarea name="big_description" id="" cols="30" rows="5" class="form-control mt-2">{{ $data->big_description }}</textarea>

                            <input type="text" name="facts" class="form-control mt-2" value="{{ $data->facts }}">
                            <textarea name="facts_description" id="" cols="30" rows="5" class="form-control mt-2">{{ $data->facts_description }}</textarea>

                            <input type="number" name="happy_clients" class="form-control mt-2" value="{{ $data->happy_clients }}">
                            <input type="number" name="projecs" class="form-control mt-2" value="{{ $data->projecs }}">
                            <input type="number" name="hours_of_support" class="form-control mt-2" value="{{ $data->hours_of_support }}">
                            <input type="number" name="team" class="form-control mt-2" value="{{ $data->team }}">
                            <input type="text" name="skills" class="form-control mt-2" value="{{ $data->skills }}">
                            <textarea name="skills_description" id="" cols="30" rows="5" class="form-control mt-2">{{ $data->skills_description }}</textarea>
                            <input type="text" name="name" class="form-control mt-2" value="{{ $item->name }}">
                            <textarea name="name_description" id="" cols="30" rows="5" class="form-control mt-2">{{ $data->name_description }}</textarea>

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection
