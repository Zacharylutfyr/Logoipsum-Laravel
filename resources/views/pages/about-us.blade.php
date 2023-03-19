@extends('layouts.app')

@section('styling')
<link rel="stylesheet" href="{{ url('about-us/css/style.css') }}">
@endsection


@section('title')
    About Us
@endsection


@section('content')
        <!-- todo Header -->

        <header class="header mt-5">
            <div class="container-fluid">
              <div class="container">
                <div class="row heading">
                  <div class="col-md-12 col-lg-6 left-header">
                    <h1>About Us</h1>
                  </div>
                  <div class="col-md-12 col-lg-6 right-header">
                    <img
                      src="about-us/img/header/header-image.png"
                      class="header-image"
                      alt="" />
                  </div>
                </div>
              </div>
            </div>
          </header>
      
          <!-- todo Last Header -->
      
          <!-- todo Main -->
      
          <main class="our-mission mar-top" id="services">
            <div class="container-fluid">
              <div class="container">
                <div class="row our-mission-left">
                  <div class="col-md-12 col-lg-6">
                    <h1>Our Mission</h1>
                    <p>Isinya adalah penjelasan & pemaparan dari visi dan misi</p>
                  </div>
                  <div class="col-md-12 col-lg-6">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting
                      industry. Lorem Ipsum has been the industry's standard dummy
                      text ever since the 1500s, when an unknown printer took a galley
                      of type and scrambled it to make a type specimen book. It has
                      survived not only five centuries, but also the leap into
                      electronic typesetting, remaining essentially unchanged.
                    </p>
                  </div>
                </div>
                <div class="row mar-top our-mission-right pt-5">
                  <div class="col-md-12 col-lg-4">
                    <h6>Lorem Ipsum Dumet</h6>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting
                      industry. Lorem Ipsum
                    </p>
                  </div>
                  <div class="col-md-12 col-lg-4">
                    <h6>Lorem Ipsum Dumet</h6>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting
                      industry. Lorem Ipsum
                    </p>
                  </div>
                  <div class="col-md-12 col-lg-4">
                    <h6>Lorem Ipsum Dumet</h6>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting
                      industry. Lorem Ipsum
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </main>
      
          <!-- todo Last Main -->
      
          <!-- todo Why Us -->
      
          <section class="why-us mar-top" id="about-us">
            <div class="container-fluid">
              <div class="container">
                <div class="row why-us-core">
                  <h1 class="mb-5 mt-5">Why Choose Us</h1>
                  <div class="col-md-12 col-lg-6 d-flex pt-5">
                    <div class="why-us-image pe-3">
                      <img src="about-us/img/why-us/secure.png" alt="" />
                    </div>
                    <div class="word">
                      <h6>Secure</h6>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum
                      </p>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex pt-5">
                    <div class="why-us-image pe-3">
                      <img src="about-us/img/why-us/valueable.png" alt="" />
                    </div>
                    <div class="word">
                      <h6>Valueable</h6>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum
                      </p>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex pt-5">
                    <div class="why-us-image pe-3">
                      <img src="about-us/img/why-us/trusted.png" alt="" />
                    </div>
                    <div class="word">
                      <h6>Trusted</h6>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum
                      </p>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex pt-5">
                    <div class="why-us-image pe-3">
                      <img src="about-us/img/why-us/manageable.png" alt="" />
                    </div>
                    <div class="word">
                      <h6>Manageable</h6>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      
          <!-- todo Last Why Us -->
      
          <!-- todo Our Team -->
      
          <section class="our-team mar-top" id="our-client">
            <div class="container-fluid">
              <div class="container">
                <h1 class="text-center mb-5 mt-5">Our Team</h1>
                <div class="row our-team-core">
                  <div class="col-sm-12 col-md-6 text-sm-center col-lg-4">
                    <img src="about-us/img/our-team/valerie.png" alt="" />
                    <h6>Valerie Agatha</h6>
                    <p>HR Consultant</p>
                  </div>
                  <div class="col-sm-12 col-md-6 text-sm-center col-lg-4">
                    <img src="about-us/img/our-team/charlie.png" alt="" />
                    <h6>Charlie</h6>
                    <p>HR Consultant</p>
                  </div>
                  <div class="col-sm-12 col-md-6 text-sm-center col-lg-4">
                    <img src="about-us/img/our-team/edward.png" alt="" />
                    <h6>Edward Hellen</h6>
                    <p>HR Consultant</p>
                  </div>
                </div>
                <div class="row our-team-core">
                  <div class="col-sm-12 col-md-6 text-sm-center col-lg-4">
                    <img src="about-us/img/our-team/valerie.png" alt="" />
                    <h6>Valerie Agatha</h6>
                    <p>HR Consultant</p>
                  </div>
                  <div class="col-sm-12 col-md-6 text-sm-center col-lg-4">
                    <img src="about-us/img/our-team/charlie.png" alt="" />
                    <h6>Charlie</h6>
                    <p>HR Consultant</p>
                  </div>
                  <div class="col-sm-12 col-md-6 text-sm-center col-lg-4">
                    <img src="about-us/img/our-team/edward.png" alt="" />
                    <h6>Edward Hellen</h6>
                    <p>HR Consultant</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
      
          <!-- todo Last Our Team -->
@endsection