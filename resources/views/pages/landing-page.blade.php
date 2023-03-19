@extends('layouts.app')

@section('styling')
<link rel="stylesheet" href="{{ url('landing-page/css/style.css') }}">
@endsection


@section('title')
    Landing Page
@endsection


@section ('content')
  <!-- todo Header -->

  <header class="header">
    <div class="container-fluid">
      <div class="container">
        <div class="row heading">
          <div class="col-md-12 col-lg-6 left-header">
            <h1>
              Human Capital <br />
              Management & Development
            </h1>
            <p>
              Kami membantu perusahaan anda membangun dan mengelola sumber
              data manusia secara efektif dan efisien.
            </p>
            <form role="search">
              <button class="btn" type="submit">Get Started</button>
            </form>
          </div>
          <div class="col-md-12 col-lg-6 right-header">
            <img src="landing-page/img/header/header.svg" class="header-image" alt="" />
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- todo Last Header -->

  <!-- todo Main -->

  <main class="main mar-top" id="services">
    <div class="container-fluid main-container">
      <div class="main-core">
        <p>
          <span>“</span> Program ini dirancang untuk membantu perusahaan anda
          membangun sistem pengelolaan manusia yang efektif dan efisien
          melalui perencanaan yang sistematis dan terintegrasi agar mampu
          berkontribusi dan produktif terhadap pencapaian tujuan perusahaan
        </p>
        <a class="navbar-brand" href="#"
          ><img src="landing-page/img/Logo-2.png" class="pb-3" alt="" />Logoispum</a
        >
      </div>
    </div>
  </main>

  <!-- todo Last Main -->

  <!-- todo Our Services -->

  <section class="our-services mar-top" id="about-us">
    <div class="container-fluid">
      <div class="container">
        <div class="row our-services-core">
          <h1 class="mb-5">Our services</h1>
          <div class="col-md-12 col-lg-6 d-flex pt-5">
            <div class="word">
              <h6>
                Development <br />
                Human Capital Program 1
              </h6>
              <ul>
                <li>Workshop peran SDM diperusahaan</li>
                <li>FGD Human process</li>
                <li>Pelatihan basic organizational</li>
                <li>Development dan basic human resource</li>
                <li>Management</li>
                <li>Pembukaan agen perubahan internal</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 d-flex pt-5">
            <div class="word">
              <h6>
                Development <br />
                Human Capital Program 2
              </h6>
              <ul>
                <li>Strategic initiative</li>
                <li>Techno-structural initiative</li>
                <li>Advantage human resource management</li>
                <li>Implementing and evaluation</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 d-flex pt-5">
            <div class="word">
              <h6>
                Human Resource <br />
                Outsourching
              </h6>
              <p>
                Ecpand your HR capacity without hiring a full-time employee
              </p>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 d-flex pt-5">
            <div class="word">
              <h6>
                Psychology <br />
                Assessment
              </h6>
              <p>
                Konsultasi Psychology Assessment untuk individu maupun
                perusahaan
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- todo Last Our Services -->
  @endsection
