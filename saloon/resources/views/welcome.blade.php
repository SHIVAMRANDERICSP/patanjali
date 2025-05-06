@include('header')
<!-- End Header Sidebar About Area -->
<!-- Start Hero Area -->
<section class="hero-area pt-80 pb-100" style="background-image: url('https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/hero-bg.png');">
    <!-- Shap Image -->
    <div class="shap-img">
        <img class="shap1 heartbeat" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/shap/shap5.png" alt="shap">
        <img class="shap2" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/shap/shap3.png" alt="shap">
        <img class="shap3 rotateme" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/shap/light.png" alt="shap">
        <img class="shap4 heartbeat" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/shap/shap2.png" alt="shap">
        <img class="shap5" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/shap/shap4.png" alt="shap">
        <img class="shap6 heartbeat" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/shap/shap1.png" alt="shap">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 align-self-center">
                <div class="hero-caption">
                    <h5>Hi, It’s our Glenic</h5>
                    <h2>Make Your Appointment With Our Consultants.</h2>
                    <p>Pellentesque a arcu tincidunt, sollicitudin eros sed, venenatis justo. Proin sed tellus massa. Nullam bibendum sodales est in faucibus.</p>
                    <a class="button-1" href="https://shtheme.com/demosd/mivaanwp/?page_id=52">get Appointment <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image">
                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/hero.png" alt="hero-img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!-- Start Info Area -->
<section class="info-area pt-110 pb-110">
    <div class="container">
        <!-- Info Box Slider -->
        <div class="infobox-slider owl-carousel owl-theme">
            <!-- Info Box -->
            @foreach ($services as $service)
            <div class="info-box">
                <div class="info-image">
                    <img class="default-img" src="{{ asset('storage/' . $service->image) }}" alt="Info">
                    <img class="hover-img" src="{{ asset('storage/' . $service->image) }}" alt="Info">
                </div>
                <h3><a href="{{ $service->link }}">{{ $service->title }}</a></h3>
                <p>{!! $service->description !!}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Info Area -->

<!-- Start About Area -->
<section class="about-area pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5 position-relative">
                <!-- About Images -->
                <div class="about-images">
                    <img class="about-img1" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/about-image1.png" alt="About Image1">
                </div>
                <div class="about-count-num" style="background-image: url('https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/shap/about-num.png');">
                    <div class="about-count-num-full">
                        <h4>1.5K+</h4>
                        <span>Visitors</span>
                    </div>
                </div>
                <div class="about-shap-img">
                    <img class="shap1 heartbeat" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/shap/shap5.png" alt="shap">
                    <img class="shap2" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/shap/shap8.png" alt="shap">
                </div>
            </div>
            <div class="col-lg-6 col-xl-7">
                <!-- About Content -->
                <div class="about-content pb-100">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h3>10 years experience</h3>
                        <h2>We Are Best Treatment For our Hospital.</h2>
                        <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus.</p>
                        <p>Tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus.</p>
                    </div>
                    <div class="row mt-20">
                        <div class="col-sm-6 mb-30">
                            <!-- About IconBox -->
                            <div class="about-iconbox">
                                <div class="about-iconbox-top">
                                    <div class="iconbox-img">
                                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/mission.png" alt="Mission">
                                    </div>
                                    <h3>Our Mission</h3>
                                </div>
                                <div class="about-iconbox-content">
                                    <p>Donec faucibus erat neque, in consectetu nisl sagittis Cras porttitor molestie.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-30">
                            <!-- About IconBox -->
                            <div class="about-iconbox">
                                <div class="about-iconbox-top">
                                    <div class="iconbox-img">
                                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/vision.png" alt="Mission">
                                    </div>
                                    <h3>Our Vision</h3>
                                </div>
                                <div class="about-iconbox-content">
                                    <p>Donec faucibus erat neque, in consectetu nisl sagittis Cras porttitor molestie.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-area-about-footer">
                        <a class="button-1 mr-10" href="https://shtheme.com/demosd/mivaanwp/?page_id=48">About More <i
                                class="fa-solid fa-arrow-right"></i></a>
                        <a href="https://www.youtube.com/watch?v=WC-g0JtEIwM" class="video-btn lightbox-image video-box">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="large-title">
        <h2>About <span>.</span> Glenic</h2>
    </div>
</section>
<!-- End About Area -->

<!-- Start Checkup Area -->
<section class="checkup-area pt-10" style="background-image: url('https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/checkup-bg.png')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 pb-2">
                <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/doctor_service.png" alt="doctor-service">
            </div>
            <div class="col-md-8">
                <div class="section-title">
                    <h3>Need a Doctor for Check-up?</h3>
                    <h2 class="text-capitalize">We provide the best medical services for you and your family.</h2>
                    <a class="button-1 mt-40" href="https://shtheme.com/demosd/mivaanwp/?page_id=52">get Appointment <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Checkup Area -->

<!-- Start Homepage Project -->
<section class="homepage-project pt-95 pb-110">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-4">
                <div class="section-title">
                    <h3>Recent Projects</h3>
                    <h2 class="pb-0">Our Case Study</h2>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="glenic-tabs">
                    <ul class="nav nav-pills mb-2" id="project-content1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="glenic-home-tab" data-bs-toggle="pill" data-bs-target="#glenic-home" type="button" role="tab" aria-controls="glenic-home" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="glenic-neurologists-tab" data-bs-toggle="pill" data-bs-target="#glenic-neurologists" type="button" role="tab" aria-controls="glenic-neurologists" aria-selected="false">Neurologists</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="glenic-orthopedic-tab" data-bs-toggle="pill" data-bs-target="#glenic-orthopedic" type="button" role="tab" aria-controls="glenic-orthopedic" aria-selected="false">Orthopedic</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="glenic-covid19-tab" data-bs-toggle="pill" data-bs-target="#glenic-covid19" type="button" role="tab" aria-controls="glenic-covid19" aria-selected="false">Covid 19</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row pt-50">
            <div class="col-md-12">
                <div class="tab-content" id="project-content">
                    <div class="tab-pane fade show active" id="glenic-home" role="tabpanel" aria-labelledby="glenic-home-tab" tabindex="0">
                        <div class="project-homeslide owl-carousel owl-theme">
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">cellulitis</a>
                                        <a href="#">influenza</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children">Anxiety in children</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project3.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=lymp-venereum-lgv"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">Parasite Infections</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=lymp-venereum-lgv">Lymp venereum (LGV)</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project2.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=alcohol-liver-disease"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">tuberculosis</a>
                                        <a href="#">HIV</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=alcohol-liver-disease">Alcohol liver disease</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">cellulitis</a>
                                        <a href="#">influenza</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children">Anxiety in children</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="glenic-neurologists" role="tabpanel" aria-labelledby="glenic-neurologists-tab" tabindex="0">
                        <div class="project-homeslide owl-carousel owl-theme">
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project2.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=alcohol-liver-disease"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">tuberculosis</a>
                                        <a href="#">HIV</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=alcohol-liver-disease">Alcohol liver disease</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">cellulitis</a>
                                        <a href="#">influenza</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children">Anxiety in children</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project3.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=lymp-venereum-lgv"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">Parasite Infections</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=lymp-venereum-lgv">Lymp venereum (LGV)</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">cellulitis</a>
                                        <a href="#">influenza</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children">Anxiety in children</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="glenic-orthopedic" role="tabpanel" aria-labelledby="glenic-orthopedic-tab" tabindex="0">
                        <div class="project-homeslide owl-carousel owl-theme">
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project2.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children-2"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">tuberculosis</a>
                                        <a href="#">HIV</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=alcohol-liver-disease-2">Alcohol liver disease</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=alcohol-liver-disease"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">cellulitis</a>
                                        <a href="#">influenza</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children">Anxiety in children</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project3.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=lymp-venereum-lgv-2"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">Parasite Infections</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=lymp-venereum-lgv-2">Lymp venereum (LGV)</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children-2"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">cellulitis</a>
                                        <a href="#">influenza</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children-2">Anxiety in children</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="glenic-covid19" role="tabpanel" aria-labelledby="glenic-covid19-tab" tabindex="0">
                        <div class="project-homeslide owl-carousel owl-theme">
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project3.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">Parasite Infections</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children">Lymp venereum (LGV)</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project2.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">tuberculosis</a>
                                        <a href="#">HIV</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children">Alcohol liver disease</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">cellulitis</a>
                                        <a href="#">influenza</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children">Anxiety in children</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                            <!-- Project Single -->
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/project.png" alt="Project Image">
                                    <div class="project-hover">
                                        <a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <p>
                                        <a href="#">cellulitis</a>
                                        <a href="#">influenza</a>
                                    </p>
                                    <h3><a href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children">Anxiety in children</a></h3>
                                    <p>These doctors imaging, including X-rays.Etiam sit amet ex ligula. Mauris tristique dolor hendrerit nibh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Homepage Project -->

<!-- Start Helpline Area -->
<section class="helpline-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <!-- About Images -->
                <div class="helpline-image">
                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/helpline.png" alt="Helpline Image1">
                    <div class="helpline-shape">
                        <img class="shap-bounce" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/shap/helpline-shap.png" alt="Shape">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <!-- About Content -->
                <div class="about-content">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h3>Emergency Helpline</h3>
                        <h2>Need Emergency Contact.</h2>
                        <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus.</p>
                    </div>
                    <!-- Helpline Content -->
                    <div class="helpline-content">
                        <ul>
                            <li>24/7 Contact Our Hospital.</li>
                            <li>Emergency Contact Our Phone Number.</li>
                        </ul>
                        <div class="row pt-20">
                            <div class="col-sm-6">
                                <div class="helpline-number">
                                    <div class="number-icon">
                                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/phone.png" alt="Phone">
                                    </div>
                                    <div class="number-text">
                                        <span>Phone Number</span>
                                        <h3><a href="tel:+124545678">(1)245-45678 call</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="helpline-number">
                                    <div class="number-icon">
                                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/email.png" alt="Phone">
                                    </div>
                                    <div class="number-text">
                                        <span>Quick You Email!</span>
                                        <h3><a href="mailto:Help.info@gmail.com">Help.info@gmail.com</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Helpline Area -->

<!-- Start Testimonial Area -->
<section class="testimonial-area pt-110 pb-120">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title text-center mb-20">
            <h3>Our Testimonials</h3>
            <h2>What clients Say?</h2>
        </div>
        <div class="all-testimonial owl-carousel owl-theme">
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="testimonial-top">
                    <div class="testimonial-img">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/client.png" alt="Client">
                    </div>
                    <div class="testimonial-text">
                        <h5>Jems Bonrnli Era</h5>
                        <span>Glenic CEO</span>
                    </div>
                </div>
                <p>Nullam cursus lacus insr veneni atis estas. Fusceri libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna.</p>
            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="testimonial-top">
                    <div class="testimonial-img">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/client2.png" alt="Client">
                    </div>
                    <div class="testimonial-text">
                        <h5>Jems Bonrnli Era</h5>
                        <span>Glenic CEO</span>
                    </div>
                </div>
                <p>Nullam cursus lacus insr veneni atis estas. Fusceri libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna.</p>
            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="testimonial-top">
                    <div class="testimonial-img">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/client3.png" alt="Client">
                    </div>
                    <div class="testimonial-text">
                        <h5>Jems Bonrnli Era</h5>
                        <span>Glenic CEO</span>
                    </div>
                </div>
                <p>Nullam cursus lacus insr veneni atis estas. Fusceri libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna.</p>
            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="testimonial-top">
                    <div class="testimonial-img">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/client.png" alt="Client">
                    </div>
                    <div class="testimonial-text">
                        <h5>Jems Bonrnli Era</h5>
                        <span>Glenic CEO</span>
                    </div>
                </div>
                <p>Nullam cursus lacus insr veneni atis estas. Fusceri libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna.</p>
            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="testimonial-top">
                    <div class="testimonial-img">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/client2.png" alt="Client">
                    </div>
                    <div class="testimonial-text">
                        <h5>Jems Bonrnli Era</h5>
                        <span>Glenic CEO</span>
                    </div>
                </div>
                <p>Nullam cursus lacus insr veneni atis estas. Fusceri libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna.</p>
            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="testimonial-top">
                    <div class="testimonial-img">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/client3.png" alt="Client">
                    </div>
                    <div class="testimonial-text">
                        <h5>Jems Bonrnli Era</h5>
                        <span>Glenic CEO</span>
                    </div>
                </div>
                <p>Nullam cursus lacus insr veneni atis estas. Fusceri libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Area -->

<!-- Start Why Choose us Area -->
<section class="why-choose-area pt-110">
    <div class="container">
        <div class="row">
            <!-- Section Title -->
            <div class="col-lg-6 mb-30">
                <div class="section-title">
                    <h3>Why Choose Us</h3>
                    <h2 class="mb-0">Trusted by 10 Lakh Customers across 36k+ Visitors hospital.</h2>
                </div>
            </div>
            <!-- Info Box 2 -->
            <div class="col-lg-3 col-sm-6 mb-30">
                <div class="info-box-2">
                    <div class="icon">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon1.png" alt="img">
                        <img class="hover-img" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon1w.png" alt="img">
                    </div>
                    <div class="content">
                        <h4>Friendly Environment</h4>
                        <p>Fusce convallis sem lorem ment Phasellus.</p>
                    </div>
                </div>
            </div>
            <!-- Info Box 2 -->
            <div class="col-lg-3 col-sm-6 mb-30">
                <div class="info-box-2">
                    <div class="icon">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon2.png" alt="img">
                        <img class="hover-img" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon2w.png" alt="img">
                    </div>
                    <div class="content">
                        <h4>Medical & Health</h4>
                        <p>Fusce convallis sem lorem ment Phasellus.</p>
                    </div>
                </div>
            </div>
            <!-- Info Box 2 -->
            <div class="col-lg-3 col-sm-6 mb-30">
                <div class="info-box-2">
                    <div class="icon">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon3.png" alt="img">
                        <img class="hover-img" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon3w.png" alt="img">
                    </div>
                    <div class="content">
                        <h4>24/7 Emergency</h4>
                        <p>Fusce convallis sem lorem ment Phasellus.</p>
                    </div>
                </div>
            </div>
            <!-- Info Box 2 -->
            <div class="col-lg-3 col-sm-6 mb-30">
                <div class="info-box-2">
                    <div class="icon">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon4.png" alt="img">
                        <img class="hover-img" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon4w.png" alt="img">
                    </div>
                    <div class="content">
                        <h4>Quality Treatment</h4>
                        <p>Fusce convallis sem lorem ment Phasellus.</p>
                    </div>
                </div>
            </div>
            <!-- Info Box 2 -->
            <div class="col-lg-3 col-sm-6 mb-30">
                <div class="info-box-2">
                    <div class="icon">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon5.png" alt="img">
                        <img class="hover-img" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon5w.png" alt="img">
                    </div>
                    <div class="content">
                        <h4>Modern Equipment</h4>
                        <p>Fusce convallis sem lorem ment Phasellus.</p>
                    </div>
                </div>
            </div>
            <!-- Info Box 2 -->
            <div class="col-lg-3 col-sm-6 mb-30">
                <div class="info-box-2">
                    <div class="icon">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon6.png" alt="img">
                        <img class="hover-img" src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/icon/icon6aw.png" alt="img">
                    </div>
                    <div class="content">
                        <h4>Exclusive Supports</h4>
                        <p>Fusce convallis sem lorem ment Phasellus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Choose us Area -->
<!-- Start Blog Area -->
<section class="blog-area pt-80">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12 text-center mb-50">
                <div class="section-title">
                    <h3>Our Blogs</h3>
                    <h2 class="mb-0">Latest News & Blogs</h2>
                </div>
            </div>
        </div>
        <!-- Section Headding -->
        <div class="row">
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-single-item">
                    <div class="thumbnail">
                        <a href="https://shtheme.com/demosd/mivaanwp/?p=7">
                            <img src="https://shtheme.com/demosd/mivaanwp/wp-content/uploads/2023/08/blog1.png" alt="blog">
                        </a>
                    </div>
                    <div class="content">
                        <div class="auth">
                            <span><a href="https://shtheme.com/demosd/mivaanwp/?author=1" title="Posts by John Doe" rel="author">John Doe</a></span>
                            <span>August 4, 2023</span>
                        </div>
                        <h3><a href="https://shtheme.com/demosd/mivaanwp/?p=7">Fusce Tincidunt Commodo Sapien, Quis Portitor.</a></h3>
                        <a class="button-1" href="https://shtheme.com/demosd/mivaanwp/?p=7">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-single-item">
                    <div class="thumbnail">
                        <a href="https://shtheme.com/demosd/mivaanwp/?p=11">
                            <img src="https://shtheme.com/demosd/mivaanwp/wp-content/uploads/2023/08/blog2.png" alt="blog">
                        </a>
                    </div>
                    <div class="content">
                        <div class="auth">
                            <span><a href="https://shtheme.com/demosd/mivaanwp/?author=1" title="Posts by John Doe" rel="author">John Doe</a></span>
                            <span>August 4, 2023</span>
                        </div>
                        <h3><a href="https://shtheme.com/demosd/mivaanwp/?p=11">Duis Eu Orci Porta, Lacinia Tortor Auctor Vulputate.</a></h3>
                        <a class="button-1" href="https://shtheme.com/demosd/mivaanwp/?p=11">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-single-item">
                    <div class="thumbnail">
                        <a href="https://shtheme.com/demosd/mivaanwp/?p=14">
                            <img src="https://shtheme.com/demosd/mivaanwp/wp-content/uploads/2023/08/blog4.png" alt="blog">
                        </a>
                    </div>
                    <div class="content">
                        <div class="auth">
                            <span><a href="https://shtheme.com/demosd/mivaanwp/?author=1" title="Posts by John Doe" rel="author">John Doe</a></span>
                            <span>August 4, 2023</span>
                        </div>
                        <h3><a href="https://shtheme.com/demosd/mivaanwp/?p=14">Suspendisse Justo Justo, Elementum Id Egestas.</a></h3>
                        <a class="button-1" href="https://shtheme.com/demosd/mivaanwp/?p=14">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
<!-- Start Company Logo Area -->
<div class="client-logo-section pb-110 pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="client-logo-slider owl-carousel">
                    <div class="single-logo-item">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/company-logo.png" alt="logo">
                    </div>
                    <div class="single-logo-item">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/company-logo.png" alt="logo">
                    </div>
                    <div class="single-logo-item">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/company-logo.png" alt="logo">
                    </div>
                    <div class="single-logo-item">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/company-logo.png" alt="logo">
                    </div>
                    <div class="single-logo-item">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/company-logo.png" alt="logo">
                    </div>
                    <div class="single-logo-item">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/company-logo.png" alt="logo">
                    </div>
                    <div class="single-logo-item">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/company-logo.png" alt="logo">
                    </div>
                    <div class="single-logo-item">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/company-logo.png" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Company Logo Area -->

@include('footer');