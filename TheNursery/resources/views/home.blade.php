@extends('Layout.master')
@section('Title','HOME')
@section('section')
	<div class="container-fluid bg-primary py-1 px-md-8 mb-5 mt-2">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="display-3 font-weight-bold text-white">New Approach to Kids Education</h1>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="img/header.png" alt="">
            </div>
        </div>
    </div>


    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Play Ground</h4>
                            <p class="m-0">We let the kids enjoy</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Music and Dance</h4>
                            <p class="m-0">We help the kids to discover their talents</p>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Arts and Crafts</h4>
                            <p class="m-0">We bring out the kids creativity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <!-- Facilities End -->



    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <h1 class="mb-4">Enroll Your Child Know</h1>
                    <p>Welcome to our Nursery. We are very proud of our caring and nurturing environment and can offer you and your child a wonderful experience into The Nursery.</p>
                  <ul class="list-inline m-0">
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>To Gain Knowledge</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>To have Social Skills</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>To master your child multiple intelligence</li>
                    </ul>
                    <a href="/class" class="btn btn-primary mt-4 py-2 px-4">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->
@endsection