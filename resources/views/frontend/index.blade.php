@extends('layouts.front')

@section('content')

    <div class="box"></div>
    @foreach ($about as $item)
    <section class="about mt-4">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 text-center">

                        <h3 class="fw-bold">{{ $item->about_title }}</h3>

                    <p>{{ $item->about_description }}</p>
                    <div class="chiz">
                        <div class="chiz1"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-4">
                    <img width="100%" class="img-fluid" src="{{ asset('assets/uploads/about/' .$item->image) }}" alt="">
                </div>
                <div class="col-sm-8">
                    <h3 class="text-muted">{{ $item->skilles_title }}</h3>
                    <p><i class="fs-5">{{ $item->skilles_description }}</i></p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul>
                                <li class="list-unstyled mt-2 fs-5 fw-700"><small class="fw-bold fs-5">Birthday: </small>{{ $item->brithday }}</li>
                                <li class="list-unstyled mt-2 fs-5 fw-700"><small class="fw-bold fs-5">Website: </small>{{ $item->website }}</li>
                                <li class="list-unstyled mt-2 fs-5 fw-700"><small class="fw-bold fs-5">Phone: </small>{{ $item->phone }}</li>
                                <li class="list-unstyled mt-2 fs-5 fw-700"><small class="fw-bold fs-5">City: </small>{{ $item->city }}</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">

                            <ul>
                                <li class="list-unstyled mt-2 fs-5 fw-700"><small class="fw-bold fs-5">Age: </small>{{ $item->age }}</li>
                                <li class="list-unstyled mt-2 fs-5 fw-700"><small class="fw-bold fs-5">Degree: </small>{{ $item->degree }}</li>
                                <li class="list-unstyled mt-2 fs-5 fw-700"><small class="fw-bold fs-5">PhEmailone: </small>{{ $item->email }}</li>
                                <li class="list-unstyled mt-2 fs-5 fw-700"><small class="fw-bold fs-5">Freelance: </small>{{ $item->freelance }}</li>
                            </ul>
                        </div>
                    </div>

                    <p class="fs-5 text-muted">
                        {{ $item->big_description }}
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="facts">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-sm-9 text-center">
                    <h3 class="fw-bold">{{ $item->facts }}</h3>
                    <div class="chiz">
                        <div class="chiz1"></div>
                    </div>
                    <p>{{ $item->facts_description }}</p>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="row text-center">
                        <div class="col-sm-3">
                            <img class="btn p-3" src="{{ asset('frontend/icon/home.png') }}" alt="">
                            <h1>{{ $item->happy_clients }}</h1>
                            <p class="text-muted">Happy Clients</p>
                        </div>
                        <div class="col-sm-3">
                            <img class="btn p-3" src="{{ asset('frontend/icon/portfolio.png') }}" alt="">
                            <h1>{{ $item->projecs }}</h1>
                            <p class="text-muted">Projects</p>
                        </div>
                        <div class="col-sm-3">
                            <img class="btn p-3" src="{{ asset('frontend/icon/resume.png') }}" alt="">
                            <h1>{{ $item->hours_of_support }}</h1>
                            <p class="text-muted">Hours Of Support</p>
                        </div>
                        <div class="col-sm-3">
                            <img class="btn p-3" src="{{ asset('frontend/icon/user.png') }}" alt="">
                            <h1>{{ $item->team }}</h1>
                            <p class="text-muted">Awards</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="skills">

        <div class="container">

            <div class="row mt-5 justify-content-center">
                <div class="col-sm-9 text-center">
                    <h3 class="fw-bold">{{ $item->skills }}</h3>
                    <div class="chiz">
                        <div class="chiz1"></div>
                    </div>
                    <p class="fw-bold">{{ $item->skills_description }}</p>
                </div>
            </div>
    @endforeach
            <div class="row skills-content mb-5 justify-content-center">

                <div class="col-lg-8">

                    @foreach ($prog as $main)
                        <div class="progress my-2">
                            <span style="font-size: 20px;" class="skill">{{ $main->prog_name }}<i class="val">{{ $main->prog_foiz }}</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                                    style="width: {{ $main->prog }};" aria-valuenow="100" aria-valuemin="0" aria-valuemax="12">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </section>

    <footer class="foot">

        <div class="container-fluid">
          <div class="row text-center text-white">
            <div class="col-sm-12">
              @foreach ($about as $item)
              <h1 class=" mt-3">{{ $item->name }}</h1>
              <div class="row justify-content-center">
                <div class="col-sm-6 ">
                  <p class="fw-bold ">{{ $item->name_description }}</p>
              @endforeach
                  <a href="" target="_blank" class="btn btn-outline-light"><i class="icon-youtube-play"></i></a>
                  <a href="" target="_blank" class="btn btn-outline-light"><i class="icon-instagram"></i></a>
                  <a href="" target="_blank" class="btn btn-outline-light"><i class="icon-paper-plane"></i></a>
                  <a href="" target="_blank" class="btn btn-outline-light"><i class="icon-facebook"></i></a>
                  <a href="" target="_blank" class="btn btn-outline-light"><i class="icon-mail-alt"></i></a>
                  <a href="" target="_blank" class="btn btn-outline-light"><i class="icon-vkontakte"></i></a>
                  <a href="" target="_blank" class="btn btn-outline-light"><i class="icon-github-circled"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </footer>

@endsection
{{-- “Start small, but dream big. Don't do too many things at the same time. Start with a few simple things at first, and gradually move on to more complex ones. And always think about the future.” --}}
