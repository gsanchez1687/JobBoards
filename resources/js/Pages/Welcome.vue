<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="JobBoards" />
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('images/hero/banner.png');">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Job Vacancies</h5>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Jobnova</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                        </ul>
                    </nav>
                </div>
            </div><!--end container-->
    </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Hero End -->
          <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card bg-white p-4 rounded shadow sticky-bar">
                            <!-- SEARCH -->
                            <div>
                                <h6 class="mb-0">Search Properties</h6>
    
                                <div class="search-bar mt-2">
                                    <div id="itemSearch2" class="menu-search mb-0">
                                        <form role="search" method="get" id="searchItemform2" class="searchform">
                                            <input type="text" class="form-control rounded border" name="s" id="searchItem2" placeholder="Search...">
                                            <input type="submit" id="searchItemsubmit2" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
    
                            <!-- Categories -->
                            <div class="mt-4">
                                <h6 class="mb-0">Categories</h6>
                                <select class="form-select form-control border mt-2" aria-label="Default select example">
                                    <option value="WD">Web Designer</option>
                                    <option value="WD">Web Developer</option>
                                    <option value="UI">UI / UX Desinger</option>
                                </select>
                            </div>
                            <!-- Categories -->
    
                            <!-- Location -->
                            <div class="mt-4">
                                <h6 class="mb-0">Location</h6>
    
                                <select class="form-select form-control border mt-2" aria-label="Default select example">
                                    <option value="NY">New York</option>
                                    <option value="MC">North Carolina</option>
                                    <option value="SC">South Carolina</option>
                                </select>
                            </div>
                            <!-- Location -->

                            <!-- Type Start -->
                            <div class="mt-4">
                                <h6>Job Types</h6>

                                <div class="d-flex justify-content-between mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Full">
                                        <label class="form-check-label" for="Full">Full Time</label>
                                    </div>

                                    <span class="badge bg-soft-primary rounded-pill">3</span>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Part">
                                        <label class="form-check-label" for="Part">Part Time</label>
                                    </div>

                                    <span class="badge bg-soft-primary rounded-pill">7</span>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Freelancer">
                                        <label class="form-check-label" for="Freelancer">Freelancing</label>
                                    </div>

                                    <span class="badge bg-soft-primary rounded-pill">4</span>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Fixed">
                                        <label class="form-check-label" for="Fixed">Fixed Price</label>
                                    </div>

                                    <span class="badge bg-soft-primary rounded-pill">6</span>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Remote">
                                        <label class="form-check-label" for="Remote">Remote</label>
                                    </div>

                                    <span class="badge bg-soft-primary rounded-pill">7</span>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Hourly">
                                        <label class="form-check-label" for="Hourly">Hourly Basis</label>
                                    </div>

                                    <span class="badge bg-soft-primary rounded-pill">44</span>
                                </div>
                            </div>
                            <!-- Type End -->
    
                            <!-- Salary -->
                            <div class="mt-4">
                                <h6 class="mb-0">Salary</h6>
    
                                <ul class="list-unstyled mt-2 mb-0">
                                    <li class="mt-1">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" checked type="radio" name="flexRadioDefault" id="rent">
                                                <label class="form-check-label" for="rent">10k - 15k</label>
                                            </div>
                                        </div>
                                    </li>
    
                                    <li class="mt-1">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" checked type="radio" name="flexRadioDefault" id="buy">
                                                <label class="form-check-label" for="buy">15k - 25k</label>
                                            </div>
                                        </div>
                                    </li>
    
                                    <li class="mt-1">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" checked type="radio" name="flexRadioDefault" id="sell">
                                                <label class="form-check-label" for="sell">more than 25K</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Salary -->
    
                            <div class="mt-4">
                                <a href="" class="btn btn-primary w-100">Apply Filter</a>
                            </div>
                        </div>
                    </div><!--end col-->
    
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/facebook-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">Web Designer / Developer</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/google-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">Marketing Director</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/android.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">Application Developer</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/lenovo-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">Senior Product Designer</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/spotify.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">C++ Developer</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/linkedin.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">Php Developer</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/circle-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">Web Designer / Developer</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/skype.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">Marketing Director</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/snapchat.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">Application Developer</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/shree-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">Senior Product Designer</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/telegram.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">C++ Developer</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-12">
                                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex align-items-center w-250px">
                                        <img src="images/company/whatsapp.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
        
                                        <div class="ms-3">
                                            <a href="job-detail-one.html" class="h5 title text-dark">Php Developer</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                        <span class="badge bg-soft-primary rounded-pill">Full Time</span>
                                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="clock" class="fea icon-sm me-1 align-middle"></i>2 days ago</span>
                                    </div>
        
                                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>Australia</span>
                                        <span class="d-flex fw-medium mt-md-2">$950 - $1100/mo</span>
                                    </div>
        
                                    <div class="mt-3 mt-md-0">
                                        <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                        <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-12 mt-4 pt-2">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="mdi mdi-chevron-left fs-6"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="mdi mdi-chevron-right fs-6"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center mb-4 pb-2">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h4 class="title mb-3">Here's why you'll love it Jobnova</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                        <div class="position-relative features text-center p-4 rounded shadow bg-white">
                            <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                <i data-feather="phone" class="fea icon-ex-md"></i>
                            </div>
    
                            <div class="mt-4">
                                <a href="" class="title h5 text-dark">24/7 Support</a>
                                <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                                <div class="mt-3">
                                    <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                        <div class="position-relative features text-center p-4 rounded shadow bg-white">
                            <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                <i data-feather="cpu" class="fea icon-ex-md"></i>
                            </div>
    
                            <div class="mt-4">
                                <a href="" class="title h5 text-dark">Tech & Startup Jobs</a>
                                <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                                <div class="mt-3">
                                    <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                        <div class="position-relative features text-center p-4 rounded shadow bg-white">
                            <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                <i data-feather="activity" class="fea icon-ex-md"></i>
                            </div>
    
                            <div class="mt-4">
                                <a href="" class="title h5 text-dark">Quick & Easy</a>
                                <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                                <div class="mt-3">
                                    <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                        <div class="position-relative features text-center p-4 rounded shadow bg-white">
                            <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                <i data-feather="clock" class="fea icon-ex-md"></i>
                            </div>
    
                            <div class="mt-4">
                                <a href="" class="title h5 text-dark">Save Time</a>
                                <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                                <div class="mt-3">
                                    <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
</template>

<style scoped>
</style>
