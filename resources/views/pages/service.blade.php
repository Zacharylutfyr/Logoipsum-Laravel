@extends('layouts/app')


@section('styling')
<link rel="stylesheet" href="{{ url('service/css/style.css') }}">
@endsection

@section('title')
    HR Consulting
@endsection

@section('content')
     <!-- todo Header -->

     <header class="header mt-5">
        <div class="container-fluid">
          <div class="container">
            <div class="row heading">
              <div class="col-md-12 col-lg-6 left-header">
                <h1>HR Outsourcing</h1>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting
                  industry. Lorem
                </p>
                <button class="btn" type="submit">Consult Now</button>
              </div>
              <div class="col-md-12 col-lg-6 right-header">
                <img src="service/img/header-image.png" class="header-image" alt="" />
              </div>
            </div>
          </div>
        </div>
      </header>
  
      <!-- todo Last Header -->
  
      <!-- todo Main -->
      <main class="main mar-top mt-5">
        <div class="container-fluid">
          <div class="container">
            <div class="row main-core">
              <div class="col-md-12 col-lg-12 col-xl-6 left-main">
                <img src="service/img/main-image.png" class="main-image" alt="" />
              </div>
              <div class="col-md-12 col-lg-12 col-xl-6 right-main">
                <h1 class="ps-5">About service</h1>
                <p class="ps-5">
                  Lorem Ipsum is simply dummy text of the printing and typesetting
                  industry. Lorem Ipsum has been the industry's standard dummy
                  text ever since the 1500s, when an unknown printer took a galley
                  of type and scrambled it to make a type specimen book. It has
                  survived not only five centuries, but also the leap into
                  electronic typesetting, remaining essentially unchanged.
                </p>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- todo Last Main -->
  
      <!-- todo Our Sources -->
  
      <section class="our-sources mar-top mt-5 pt-5">
        <div class="container-fluid">
          <div class="container">
            <div class="row our-sources-core">
              <h1 class="mb-5">Why should our sources?</h1>
              <div class="col-md-12 col-lg-6 mar-top">
                <h5>
                  <img src="service/img/our-sources-image.png" class="me-4" alt="" />
                  Cuts cost
                </h5>
                <p>
                  Operational and labour costs are significantly reduced when you
                  start outsourcing. You don’t have to fork out a fortune of your
                  hard-earned money to develop and establish a department in your
                  company. Through outsourcing, you can minimise on unnecessary
                  expenditures and inject your capital more in other aspects of
                  your business
                </p>
              </div>
              <div class="col-md-12 col-lg-6 mar-top">
                <h5>
                  <img
                    src="service/img/our-sources-image.png"
                    class="me-4"
                    alt="" />
                  Access to professionals
                </h5>
                <p>
                  Just by outsourcing, you will short-cut your way into the pool
                  of global knowledge and have the best experts in the field
                  working alongside you and your company. Complex tasks will be
                  operated by professionals with extensive knowledge and vast
                  experience. Outsourcing helps you to increase efficiency in your
                  business.
                </p>
              </div>
  
              <div class="col-md-12 col-lg-6 mar-top">
                <h5>
                  <img src="service/img/our-sources-image.png" class="me-4" alt="" />
                  Save time and energy
                </h5>
                <p>
                  You thought that you’ll only save time, right? Well, more good
                  news coming your way! Outsourcing also saves you a ton of your
                  time and energy. You will be doing yourself a favour by freeing
                  up your schedule, which will allow you to focus on improving and
                  scaling your business to the next level.
                </p>
              </div>
              <div class="col-md-12 col-lg-6 mar-top">
                <h5>
                  <img
                    src="service/img/our-sources-image.png"
                    class="me-4"
                    alt="" />
                  Reduces risk
                </h5>
                <p>
                  Outsourcing with a notable firm will help you to mitigate the
                  risks in your company. Instead of pouring time, energy and money
                  into creating areas of professional skills and development such
                  as HR or ITs, it is much better to outsource these
                  responsibilities.
                </p>
              </div>
            </div>
            <p class="quotes">
              “Let us supply you with trained professionals in that area who can
              help you to smoothly iron out these critical duties”
            </p>
          </div>
        </div>
      </section>
  
      <!-- todo Last Our Sources -->
  
      <!-- todo Services -->
  
      <section class="services mar-top">
        <div class="container-fluid">
          <div class="container">
            <div class="row services-core justify-content-center">
              <h2>Check our ther services</h2>
              <div class="col-md-12 col-lg-4 d-flex justify-content-evenly">
                <div class="serviceses mt-5">
                  <img src="service/img/services-1.png" alt="" />
                  <p>
                    Development <br />
                    Human Capital Program 1
                  </p>
                </div>
              </div>
              <div class="col-md-12 col-lg-4 d-flex justify-content-evenly">
                <div class="serviceses mt-5">
                  <img src="service/img/services-2.png" alt="" />
                  <p>
                    Development <br />
                    Human Capital Program 2
                  </p>
                </div>
              </div>
              <div class="col-md-12 col-lg-4 d-flex justify-content-evenly">
                <div class="serviceses mt-5">
                  <img src="service/img/services-3.png" alt="" />
                  <p>
                    <br />
                    Psychology Assessment
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- todo Last Services -->
  
      <!-- todo consult-now -->
  
      <section class="consult-now mar-top">
        <div class="container-fluid">
          <div class="container">
            <div class="consult-core">
              <h1>Consult Now</h1>
              <form class="form mt-5">
                <h6 class="mar-top">Name</h6>
                <input
                  class="form-control"
                  type="text"
                  placeholder=""
                  aria-label="default input example" />
  
                <h6 class="mar-top">Company name</h6>
                <input
                  class="form-control"
                  type="text"
                  placeholder=""
                  aria-label="default input example" />
  
                <h6 class="mar-top">Company address</h6>
                <input
                  class="form-control"
                  type="text"
                  placeholder=""
                  aria-label="default input example" />
  
                <h6 class="mar-top">PIC number</h6>
                <input
                  class="form-control"
                  type="text"
                  placeholder=""
                  aria-label="default input example" />
  
                <h6 class="mar-top">Request service</h6>
                <input
                  class="form-control"
                  type="text"
                  placeholder=""
                  aria-label="default input example" />
  
                <h6 class="mar-top">Need description</h6>
                <textarea
                  class="form-control"
                  placeholder=""
                  id="floatingTextarea2"
                  style="height: 100px"></textarea>
                <form class="d-flex" role="search">
                  <button class="btn mb-5 mt-3" type="submit">Get Started</button>
                </form>
              </form>
            </div>
          </div>
        </div>
      </section>
  
      <!-- todo Last consult-now -->
  
@endsection
