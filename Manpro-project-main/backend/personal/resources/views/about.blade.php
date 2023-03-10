@extends('layouts.app')

@section('content')

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color:white">Profile</h2>
        </div>
        @forelse($about as $a)  
        <div class="row">
          <div class="col-lg-4">
          <img src="{{ asset('assets/user/img/wiwitab.png') }}" alt="Buwiwid.png" style="aspect-ratio: 3/3; 160px; width: 100%;">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Dosen Universitas Amikom Yogyakarta</h3>
            <p style="color:white">
              {{ $a->desc }}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li style="color:white"><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> {{ $a->birthday }}</li>
                  <li style="color:white"><i class="bi bi-rounded-right"></i> <strong>Website:</strong>  {{ $a->website}}</li>
                  <li style="color:white"><i class="bi bi-rounded-right"></i> <strong>Phone:</strong>  {{ $a->phone }}</li>
                  <li style="color:white"><i class="bi bi-rounded-right"></i> <strong>City:</strong>  {{ $a->city }}</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li style="color:white"><i class="bi bi-rounded-right"></i> <strong>Age:</strong>  {{ $a->age }}</li>
                  <li style="color:white"><i class="bi bi-rounded-right"></i> <strong>Degree:</strong>  {{ $a->degree }}</li>
                  <li style="color:white"><i class="bi bi-rounded-right"></i> <strong>Email:</strong> {{ $a->email }}</li>
                  <li style="color:white"><i class="bi bi-rounded-right"></i> <strong>Work:</strong>  {{ $a->work }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color:white">Skills</h2>
        </div>

        <div class="row skills-content">
        @forelse($skills as $s)  
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">{{ $s->name }}<i class="val">{{ $s->percentage }}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $s->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        @empty
        @endforelse
        </div>
      </div>
    </section>End Skills Section -->
  </main><!-- End #main -->
  @endsection