@extends('layouts.app')

@section('styling')
<link rel="stylesheet" href="{{ url('our-client/css/style.css') }}">
@endsection

@section('title')
    Our Client
@endsection

@section('content')
       <!-- todo Header -->

       <header class="header">
        <div class="container-fluid">
          <div class="container">
            <div class="row heading">
              <div class="col-md-12 col-lg-5 left-header">
                <h1>Our Client</h1>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting
                  industry. Lorem Ipsum has been the industry's standard dummy
                  text ever since the 1500s, when an unknown printer took a galley
                  of type and scrambled it to make a type specimen
                </p>
              </div>
              <div class="col-md-12 col-lg-7 right-header">
                <img src="our-client/img/header/header.png" class="header-image" alt="" />
              </div>
            </div>
          </div>
        </div>
      </header>
  
      <!-- todo Last Header -->
  
      <!-- todo Logo -->
  
      <section class="logo mar-top">
        <div class="container-fluid">
          <div class="logo-core">
            <img src="our-client/img/logo/logoipsum-1.png" alt="logoipsum-1" />
            <img src="our-client/img/logo/logoipsum-2.png" alt="logoipsum-2" />
            <img src="our-client/img/logo/logoipsum-3.png" alt="logoipsum-3" />
            <img src="our-client/img/logo/logoipsum-4.png" alt="logoipsum-4" />
            <img src="our-client/img/logo/logoipsum-5.png" alt="logoipsum-5" />
          </div>
        </div>
      </section>
      <!-- todo Last Logo -->
  
      <!-- todo What They Said -->
      <section class="what-they-said mar-top">
        <div class="container-fluid">
          <div class="container">
            <div class="what-they-said-core">
              <h1>What they said</h1>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been
              </p>
              <div class="carousel">
                <div
                  id="carouselExampleDark"
                  class="carousel carousel-dark slide"
                >
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                      <div class="content-carousel mb-2">
                        <div class="scarlet-witch-image">
                          <img
                            src="our-client/img/what-they-said/scarlet-witch.png"
                            class="d-block w-10 pe-4"
                            alt="scarlet-witch"
                          />
                        </div>
                        <div class="scarlet-witch-text">
                          <h5 class="mt-2">Scarlet witch</h5>
                          <p>Human Resource Departement</p>
                        </div>
                      </div>
                      <p class="scarlet-witch-text-paragraf">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                        simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry. Lorem Ipsum
                        has been
                      </p>
                    </div>
  
                    <div class="carousel-item" data-bs-interval="20000">
                      <div class="content-carousel mb-2">
                        <div class="scarlet-witch-image">
                          <img
                            src="our-client/img/what-they-said/sergio-ramos.jpg"
                            class="d-block w-10 pe-4"
                            alt="scarlet-witch"
                          />
                        </div>
                        <div class="scarlet-witch-text">
                          <h5 class="mt-2">Sergio Ramos</h5>
                          <p>Football Player</p>
                        </div>
                      </div>
                      <p class="scarlet-witch-text-paragraf">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                        simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry. Lorem Ipsum
                        has been
                      </p>
                    </div>
                    <div class="carousel-item" data-bs-interval="30000">
                      <div class="content-carousel mb-2">
                        <div class="scarlet-witch-image">
                          <img
                            src="our-client/img/what-they-said/Pevita-Pearce.jpg"
                            class="d-block w-10 pe-4"
                            alt="scarlet-witch"
                          />
                        </div>
                        <div class="scarlet-witch-text">
                          <h5 class="mt-2">Pevita Pearce</h5>
                          <p>Actress</p>
                        </div>
                      </div>
                      <p class="scarlet-witch-text-paragraf">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                        simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry. Lorem Ipsum
                        has been
                      </p>
                    </div>
                  </div>
  
                  <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleDark"
                    data-bs-slide="next"
                  >
                    <span
                      class="carousel-control-next-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- todo Last What They Said -->
  
      <!-- todo likes Images -->
      <div class="likes-image mar-top">
        <div class="container-fluid">
          <img src="our-client/img/likes/likes.png" alt="" />
        </div>
      </div>
      <!-- todo Last likes Images -->
  
@endsection