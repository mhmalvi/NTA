@extends('layouts.app')

{{--@section('title', 'Noble Training Academy')--}}

@push('styles')
<style>
    /* .home-qualification-text{
                padding-top:15%;
            }
             */
    /* @media only screen and (max-width: 768px) and (min-width: 481px) {
               
                .home-qualification-text{
                padding-top:2%;
                padding-bottom:2%;
              }
  
            } */
    /* @media screen and (max-width: 768px) {
               
                .home-qualification-text{
                padding-top:5%;
                padding-bottom:5%;
              }
  
            } */

</style>
@endpush

@push('seo')
<meta name="title" content="Noble Training Academy (NTA)"/>
<meta name="description" content="Noble Training Academy was established in 2016 and is privately operated Registered Training Organisation. Our courses are provided within Australia." />
@endpush

@push('og')
<meta property="og:title" content="Noble Training Academy (NTA)"/>
<meta property="og:keywords" content="beauty therapy,remedial massage,hair dressing,certificate iii,diploma,colleges in australia,certificate ii">
<meta property="og:description" content="Noble Training Academy was established in 2016 and is privately operated Registered Training Organisation. Our courses are provided within Australia.">
<meta property="og:image" content="{{ asset('assets/images/about/nta_logo.png') }}" />

<!-- For Tweeter -->
<meta name="twitter:card" content="Noble Training Academy (NTA)"/>
<meta name="twitter:title" content="Noble Training Academy (NTA)"/>
<meta name="twitter:description" content="Noble Training Academy was established in 2016 and is privately operated Registered Training Organisation. Our courses are provided within Australia."/>
<meta name="twitter:image" content="{{ asset('assets/images/about/nta_logo.png') }}"/>
@endpush

@section('content')

@include('components.slider')

<!-- Company History -->

<section id="history" class="padding bg_grey">

    <div class="container aboutus">

        <div class="card mb-3" style="background-color: transparent; border: 0px;">

            {{-- <h2 class="heading text-center">Welcome to Noble Training Academy<span --}}
            <h2 class="heading text-center title_section">Welcome to Noble Training Academy<span class="divider-center"></span></h2>

            {{-- <div style="padding: 20px 0px;"></div> --}}
            {{-- Welcome to Noble Training Academy (NTA), where we believe that a quality education should be accessible to everyone. Our college offers an incredible range of courses designed to equip you with the skills and knowledge you need to thrive in today's competitive job market. --}}


            {{-- <div class="row">
                <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">
                    <div class="home-qualification-text" style="padding-top: 24px">
                        Take courses on hairdressing to develop your skills for a solid career. Get qualified and increase your value in the industry.
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 wow fadeInRight">

                    <img src="{{ asset('assets/images/1.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/2.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">
            <div class="home-qualification-text" style="padding-top: 24px">
                Noble Training Academy (NTA) is one of the leading training organisations for the massage and grooming industry in Australia.
            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">

            <div class="home-qualification-text">
                At NTA, you will get access to extensive resources and modern facilities to learn the trending skills required for the best jobs in the sector.
            </div>

        </div>
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/3.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>


    </div>
    <div class="row">
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/4.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">

            <div class="home-qualification-text" style="padding-top: 24px">
                As a Recognised Training Organisation (RTO), NTA provides nationally accredited training with affordable payment plans.
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">

            <div class="home-qualification-text">
                The Noble Training Academy is partnered with some of the most reputed names in the industry. NTA's primary goal is to maintain high quality in their courses.
            </div>

        </div>
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/5.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>




    </div> --}}

    <div class="row">
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">
            <div class="home-qualification-text" style="padding-top: 24px">
                Welcome to Noble Training Academy (NTA), where we believe that a quality education should be accessible to everyone. Our college offers an incredible range of courses designed to equip you with the skills and knowledge you need to thrive in today's competitive job market.

            </div>
        </div>
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/1.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/2.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">
            <div class="home-qualification-text" style="padding-top: 24px">
                At Noble Training Academy, we understand that everyone has different needs when it comes to their education. That's why we offer flexible study options, including both classroom-based and online courses, to help you achieve your career goals. Our practical, hands-on training is delivered by experienced faculty members who are passionate about their fields. They're committed to providing you with the best education possible and will guide you every step of the way to ensure you receive the support and guidance you need to succeed.

            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">

            <div class="home-qualification-text">
                We offer a wide range of courses, including the Certificate IV in Child, Youth and Family Intervention, Certificate IV in Mental Health, Certificate IV in Leisure and Health, Diploma of Youth Work, Diploma of Counselling, Diploma of Mental Health, Certificate III in Health Services Assistance, Certificate III in Health Administration, Certificate IV in Allied Health Assistance, Certificate III in Hairdressing, Certificate IV in Beauty Therapy, and Diploma of Beauty Therapy. With such a wide variety of courses available, we're confident that we have something that will be perfect for you.

            </div>

        </div>
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/3.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>


    </div>
    <div class="row">
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/4.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">

            <div class="home-qualification-text" style="padding-top: 24px">
                But we also know that education can be expensive, which is why we offer a range of funding options to make it more affordable. From RPL to flexible student payment, we're committed to making quality education accessible to everyone. We want you to have the opportunity to gain the knowledge and skills you need to succeed, regardless of your financial situation.

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">

            <div class="home-qualification-text">
                Our graduates are highly sought after in their fields, and we're proud of the success they've achieved. They're making a real difference in the world, and you could too! Our courses are designed to provide you with the best education possible, and we're confident that you'll be well-prepared to take on the challenges of the modern workplace.

            </div>

        </div>
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/5.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>




    </div>


    {{-- <div class="row">
                <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">
                    <div class="home-qualification-text" style="padding-top: 24px">
                        Take courses on hairdressing and remedial massage therapy to develop your skills for a solid career. Get qualified and increase your value in the industry.
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 wow fadeInRight">

                    <img src="{{ asset('assets/images/family-counseling-session-home-with-therapist-pshycologist-showing-pictures-emotions-girl-african-american-father-european-mother.jpg') }}" alt="our priorties" class="img-responsive" width="100%">

    </div>
    </div> --}}
    <div class="row">
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/full-length-volunteers-smiling-camera-while-sorting-packing-foodstuff-cardboard-boxes (1).jpg') }}" alt="our priorties" class="img-responsive" width="100%">

        </div>
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">
            <div class="home-qualification-text" style="padding-top: 24px">
                So why wait? Enroll in one of our courses today and start your journey toward success. Whether you're looking to start a new career, further your education, or improve your current skills, we have the resources and support you need to achieve your goals. We're dedicated to helping you succeed, and we can't wait to see what you'll achieve!

            </div>

        </div>

    </div>
    {{-- <div class="row">
                <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">

                    <div class="home-qualification-text">
                        At NTA, you will get access to extensive resources and modern facilities to learn the trending skills required for the best jobs in the sector.
                    </div>

                </div>
                <div class="col-md-5 col-sm-6 wow fadeInRight">

                    <img src="{{ asset('assets/images/woman-receiving-beauty-treatment-skin-care.jpg') }}" alt="our priorties" class="img-responsive" width="100%">


    </div>


    </div> --}}
    {{-- <div class="row">
                <div class="col-md-5 col-sm-6 wow fadeInRight">

                    <img src="{{ asset('assets/images/4.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
    </div>
    <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">

        <div class="home-qualification-text" style="padding-top: 24px">
            As a Recognised Training Organisation (RTO), NTA provides nationally accredited training with affordable payment plans.
        </div>
    </div>

    </div>
    <div class="row">
        <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">

            <div class="home-qualification-text">
                The Noble Training Academy is partnered with some of the most reputed names in the industry. NTA's primary goal is to maintain high quality in their courses.
            </div>

        </div>
        <div class="col-md-5 col-sm-6 wow fadeInRight">

            <img src="{{ asset('assets/images/5.jpg') }}" alt="our priorties" class="img-responsive" width="100%">
        </div>




    </div> --}}


    <!-- <div class="row no-gutters">

                    <div class="col-md-12">

                        <div class="card-body">

                            <p class="text-center">

                                Recognition of Prior Learning (RPL) is an evaluation process used by RTOs to evaluate a

                                person's expertise, knowledge, and experience acquired by working and learning in Australia

                                or abroad. Whether through life experience, education, or other activities such as

                                volunteering. RTOs can also provide credit for units of competency, which can cut down on

                                the time it takes to complete a certification.

                            </p>

                            <p class="text-center">

                                The Australian Qualification Framework (AQF) acknowledged student's previous expertise,

                                skills, and training. To enhance student's progression into and between qualifications, they

                                design RPL training.

                            </p>

                            <p class="text-center">

                                Turn your work experience or a degree into a nationally recognized credential. With our

                                quick and straightforward RPL training, you can fill in any knowledge gap. Once your skills

                                are certified by RTO, your RPL certificate will bring a massive boost to your career. Your

                                career will fly!

                            </p>

                            <p class="text-center"> Each Registered Training Organization has its policies and procedures

                                for determining the

                                RPL assessment, but the basic principles remain the same. The knowledge and skills you've

                                learned at work or in school will help you complete a certification faster and reduce the

                                time it takes to complete a course to get you closer to your goal.</p>

                        </div>

                    </div>

                </div>-->

    </div>

    </div>

</section>

<!-- Company History -->

{{-- <section class="rpl"> --}}

<!--  <button type="button" class="rpl-btn" onClick="window.location.href= 'https://nta.nsw.edu.au/check-your-rpl-eligibility'">

            <!--<lord-icon src="https://cdn.lordicon.com//pndvzexs.json" trigger="loop"
                colors="primary:#002B46,secondary:#002B46" class="lord-icon-size">

            </lord-icon>-->

<!--  Click Here For Your Free Skill Check

        </button>-->

{{-- @include('components.rpl-modal')

    </section> --}}

<!--ABout US-->

<section id="about" style="padding-top: 28px">

    <div class="container">

        <h1 class="heading text-center title_section" style="display: block;">About Us <span class="divider-center"></span></h1>

        {{-- <div class="row"> --}}

        <!--<div class="icon_wrap padding-bottom-half clearfix">

                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">

                        <i class="icon-globe"></i>

                        <h4 class="text-capitalize bottom20 margin10">Qualification</h4>

                        <p class="no_bottom text-justify">We provide industry-specific knowledge and skills so you can

                            become job-ready once you complete your qualification</p>

                    </div>

                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">

                        <i class="icon-layers"></i>

                        <h4 class="text-capitalize bottom20 margin10">Features</h4>

                        <p class="no_bottom text-justify">Noble Training Academy (RTO code 70201) is Providing nationally

                            accredited training and Recognition of Prior Learning Australia wide.</p>

                    </div>

                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">

                        <i class="icon-laptop"></i>

                        <h4 class="text-capitalize bottom20 margin10">RPL</h4>

                        <p class="no_bottom text-justify">Recognition of prior learning is an assessment process that

                            recognises an expert's knowledge and certifies it.</p>

                    </div>

                </div>-->


        <div class="about_section">
            {{-- <div class="about_text_section" style="text-align: justify;">
                Registered in 2011, Noble Training Academy (NTA) is a reputed Recognised Training Organisation (RTO Code: 70201) based in New South Wales, Australia. We offer formal qualifications in remedial massage therapy and hairdressing that are nationally recognised. Our expert team of instructors and state-of-the-art facilities will ensure that you have the proper environment to learn relevant industry skills. NTA is regulated by the Australian Skills Quality Authority (AQSA), so we make no compromise when it comes to quality and reliability. We will provide you with the right combination of knowledge and skills to progress in your career.
            </div> --}}

            <div class="about_text_section" style="text-align: justify;">
                Step into the world of Noble Training Academy (NTA), a premier Recognised Training Organisation (RTO Code: 70201) established in 2011 in New South Wales, Australia. Our nationally recognised formal qualifications in remedial massage therapy and hairdressing are designed to provide you with a strong foundation and the right tools to succeed in the industry.

                At NTA, our expert instructors are dedicated to providing you with the highest quality training available. With state-of-the-art facilities, you'll have access to the latest tools and equipment to help you develop relevant industry skills. We believe in a hands-on approach to learning, so you can expect practical, real-world experience as you gain the knowledge and expertise necessary to advance your career.

                As a regulated training provider by the Australian Skills Quality Authority (AQSA), NTA is committed to maintaining the highest standards of quality and reliability. We take pride in offering a comprehensive curriculum that blends theoretical knowledge with practical skills, ensuring that you receive the right combination of training and experience to succeed in your field.

                Whether you're a newcomer to the industry or looking to expand your skillset, NTA has the resources and expertise to help you achieve your goals. Our focus on practical, hands-on training ensures that you'll have the confidence and expertise to succeed in your chosen profession.

                So why not take the first step towards your dream career and join the NTA family? Our nationally recognised qualifications in remedial massage therapy and hairdressing are your ticket to a fulfilling and successful career. Join us today and unlock your full potential!


            </div>

            <div class="about_img_section" style="margin:auto;">
                <img src="{{ asset('assets/images/about/nta_logo.png') }}" alt="our priorties" class="img-responsive" width="100%">

            </div>
        </div>

        {{-- <div class="container margin_top">
            <div class="row">
                <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">
                    <div class="row">
                        <div class="about-post" style="margin-right: 15%; text-align: justify" >
                                Registered in 2011, Noble Training Academy (NTA) is a reputed Recognised Training Organisation (RTO Code: 70201) based in New South Wales, Australia. We offer formal qualifications in remedial massage therapy and hairdressing that are nationally recognised. Our expert team of instructors and state-of-the-art facilities will ensure that you have the proper environment to learn relevant industry skills. NTA is regulated by the Australian Skills Quality Authority (AQSA), so we make no compromise when it comes to quality and reliability. We will provide you with the right combination of knowledge and skills to progress in your career.

                            </div>

                       

 

     

         

                    </div>

                </div>

                <div class="col-md-5 col-sm-6 wow fadeInRight">

                    <img src="{{ asset('assets/images/about/about01.jpg') }}" alt="our priorties" class="img-responsive" width="100%"
        >

    </div>

    </div>

    </div>
    --}}

    {{-- </div> --}}

    </div>

    <div class="container margin_top">

        <div class="row " style="margin-left: 5px">

            <div class="col-md-7 col-sm-6 priorty wow fadeInLeft pb32">

                <h1 class="heading bottom25">Why Choose Us <span class="divider-left"></span></h1>

                <div class="row">

                    <div class="col-md-12">

                        <div class="about-post">

                            <a href="#." class="border_radius"><img src="{{ asset('assets/images/hands.png') }}" alt="hands"></a>



                            <p style="font-size: 20px;margin-top: 4%;"><b>Nationally Recognised Qualifications</b></p>

                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="about-post">

                            <a href="#." class="border_radius"><img src="{{ asset('assets/images/social-care.png') }}" alt="hands"></a>

                            <p style="font-size: 20px;margin-top: 4%;"><b>Qualified and Experienced Instructors</b></p>

                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="about-post">

                            <a href="#." class="border_radius"><img src="{{ asset('assets/images/maintenance.png') }}" alt="hands"></a>

                            <p style="font-size: 20px;margin-top: 4%;"><b>Affordable Course Fees</b></p>



                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="about-post">

                            <a href="#." class="border_radius"><img src="{{ asset('assets/images/home.png') }}" alt="hands"></a>

                            <p style="font-size: 20px;margin-top: 4%;"><b>Excellent Facilities and Extensive Resources</b></p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-5 col-sm-6 wow fadeInRight ">

                <img src="{{ asset('assets/images/about/about02.jpg') }}" alt="our priorties" class="img-responsive chosse_us_img" width="100%">

            </div>

        </div>

    </div>

</section>

<!--ABout US-->





<!-- Courses -->



@php

$DBT = 'This qualification reflects the role of individuals employed as beauty therapists to provide a broad range of beauty therapy treatments and services including facial treatments, body massage and treatments, hair removal, lash and brow treatments, nail and make-up services.';

$CBT = 'This qualification reflects the role of individuals who work as beauty therapists to provide a range of beauty therapy treatments and services, including lash and brow treatments, nail services, make-up, massage and waxing.';

$CHD = 'This qualification reflects the role of hairdressers who use a range of well-developed sales, consultation and technical skills and knowledge to provide a broad range of hairdressing services to clients.';

$DRM = 'This qualification reflects the role of remedial massage therapists who work with clients presenting with soft tissue dysfunction, musculoskeletal imbalance or restrictions in range of motion (ROM).';

@endphp



<section id="courses" class="padding parallax courses">

    <div class="container">

        <div class="row">

            <div class="col-md-12 wow fadeInDown">

                <h1 class="heading course_title">Our Courses<span class="divider-left"></span></h1>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="slider_wrapper">

                    <div id="course_slider" class="owl-carousel">

                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" src="{{ asset('assets/images/courses/thumb03.jpg') }}" alt="Courses" width="100%" style="height: 24rem;" class="img-responsive border_radius">



                            </div>

                            <h3 class="bottom15"><a href="{{ route('hairdressing') }}" class="course_name">SHB30416 -

                                    Certificate III in Hairdressing</a></h3>

                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('hairdressing') }}" class="btn_common blue border_radius">Read More</a>

                        </div>
                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/smiling-family-therapy-session-by-female-counselor-writing-clipboard-office.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">




                            </div>

                            <h3 class="bottom15"><a href="{{ route('child_youth.family') }}" class="course_name">CHC40321 -



                                    Certificate IV in Child, Youth and Family Intervention</a></h3>

                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('child_youth.family') }}" class="btn_common blue border_radius">Read More</a>


                        </div>
                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/man-talking-about-his-problems-at-psychology-class-2022-10-27-19-02-02-utc.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">




                            </div>

                            <h3 class="bottom15"><a href="{{ route('mental.health') }}" class="course_name">CHC43315 -



                                    Certificate IV in Mental Health</a></h3>


                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('mental.health') }}" class="btn_common blue border_radius">Read More</a>


                        </div>
                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/sunset-yoga-or-zen-man-in-meditation-by-a-calm-or-2022-12-29-22-42-51-utc.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">



                            </div>

                            <h3 class="bottom15"><a href="{{ route('leisure.health') }}" class="course_name">CHC43415 -




                                    Certificate IV in Leisure and Health</a></h3>



                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('leisure.health') }}" class="btn_common blue border_radius">Read More</a>


                        </div>
                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/environment-volunteer-teamwork-concept.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">




                            </div>

                            <h3 class="bottom15"><a href="{{ route('youth.work') }}" class="course_name">CHC50421 -





                                    Diploma of Youth Work</a></h3>




                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('youth.work') }}" class="btn_common blue border_radius">Read More</a>


                        </div>

                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/close-up-couple-counseling.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">




                            </div>

                            <h3 class="bottom15"><a href="{{ route('diploma.counselling') }}" class="course_name">CHC51015 -






                                    Diploma of Counselling</a></h3>





                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('diploma.counselling') }}" class="btn_common blue border_radius">Read More</a>


                        </div>

                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/family-counseling-session-home-with-therapist-pshycologist-showing-pictures-emotions-girl-african-american-father-european-mother.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">




                            </div>

                            <h3 class="bottom15"><a href="{{ route('diploma.mental_health') }}" class="course_name">CHC53315 -







                                    Diploma of Mental Health</a></h3>






                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('diploma.mental_health') }}" class="btn_common blue border_radius">Read More</a>


                        </div>

                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/nurse-talking-with-senior-woman-with-walking-disabilities-sitting-wheelchair-into-private-modern-recovery-clinic-hospital-handicapped-old-retired-patient-medical-consultation-advice.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">




                            </div>

                            <h3 class="bottom15"><a href="{{ route('health.services_assistance') }}" class="course_name">HLT33115 -








                                    Certificate III in Health Services Assistance</a></h3>







                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('health.services_assistance') }}" class="btn_common blue border_radius">Read More</a>


                        </div>

                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/happy-male-doctor-shaking-hands-with-senior-man-who-came-medical-appointment-with-his-wife.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">




                            </div>

                            <h3 class="bottom15"><a href="{{ route('health.admin') }}" class="course_name">HLT37315 -









                                    Certificate III in Health Administration</a></h3>








                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('health.admin') }}" class="btn_common blue border_radius">Read More</a>


                        </div>

                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/happy-doctor-listening-heartbeat-mature-patient-while-examining-his-during-home-visit.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">





                            </div>

                            <h3 class="bottom15"><a href="{{ route('health.service') }}" class="course_name">HLT43021 -










                                    Certificate IV in Allied Health Assistance</a></h3>









                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('health.service') }}" class="btn_common blue border_radius">Read More</a>


                        </div>

                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/young-female-hairdresser-cutting-modeling-brown-hair-by-scissors-comb-attractive-brunette-client-while-she-is-sitting-armchair-beauty-salon.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">




                            </div>

                            <h3 class="bottom15"><a href="{{ route('hairdressing.four') }}" class="course_name">SHB40216 -











                                    Certificate IV in Hairdressing</a></h3>










                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('hairdressing.four') }}" class="btn_common blue border_radius">Read More</a>


                        </div>
                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/traditional-oriental-massage-therapy-beauty-treatments-young-beautiful-have-massage-woman-spa-salon.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">





                            </div>

                            <h3 class="bottom15"><a href="{{ route('diploma_beauty.therapy') }}" class="course_name">SHB50121 -












                                    Diploma of Beauty Therapy</a></h3>











                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('diploma_beauty.therapy') }}" class="btn_common blue border_radius">Read More</a>


                        </div>
                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/woman-receiving-beauty-treatment-skin-care.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">




                            </div>

                            <h3 class="bottom15"><a href="{{ route('beautyTherapy') }}" class="course_name">SHB40121 -
                                    Certificate IV in Beauty Therapy</a></h3>
                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('beautyTherapy') }}" class="btn_common blue border_radius">Read More</a>


                        </div>

                        <!--<div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/closeup-relaxed-woman-getting-back-massage-with-herbal-balls-health-spa.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">





                            </div>

                            <h3 class="bottom15"><a href="{{ route('diplomaInRemedial') }}" class="course_name">HLT52015 -

                                    Diploma of Remedial Massage (Superseded)</a></h3>
                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('diplomaInRemedial') }}" class="btn_common blue border_radius">Read More</a>



                        </div>

                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/female-cosmetologist-holds-pipette-with-essential-oil-before-aromatherapy-massage-pat.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">





                            </div>

                            <h3 class="bottom15"><a href="{{ route('BeautyTherapy_superseded') }}" class="course_name">SHB40115 -



                                    Certificate IV in Beauty Therapy (Superseded)</a></h3>

                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('BeautyTherapy_superseded') }}" class="btn_common blue border_radius">Read More</a>




                        </div>

                        <div class="item">

                            <div class="image bottom20">

                                <img class="course_image" style="height: 24rem;" src="{{ asset('assets/images/courses/woman-beauty-salon-having-face-neck-massage.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">





                            </div>

                            <h3 class="bottom15"><a href="{{ route('diplomaInBeauty') }}" class="course_name">SHB50115 -



                                    Diploma of Beauty Therapy (Superseded)</a></h3>


                            {{-- <p class="bottom15">

                                <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>

                            </p> --}}

                            <a href="{{ route('diplomaInBeauty') }}" class="btn_common blue border_radius">Read More</a>



                        </div>-->


                        {{-- <div class="item">

                            <div class="image bottom20">

                                <img src="{{ asset('assets/images/courses/thumb04.jpg') }}" alt="Courses" width="100%" class="img-responsive border_radius">

                    </div>

                    {{-- <h3 class="bottom15"><a href="{{ route('diplomaInRemedial') }}"
                    class="course_name">HLT52015 - Diploma in Remedial Massage</a></h3> --}}

                    {{-- <p class="bottom15">

                        <?php echo mb_strimwidth($DRM, 0, 200, '...'); ?>

                    </p> --}}

                    {{-- <a href="{{ route('diplomaInRemedial') }}" class="btn_common blue border_radius">Read

                    More</a> --}}

                </div>

            </div>

        </div>

    </div>

    </div>


    </div>

</section>

<!-- Courses -->




<!--Customers Review-->
<section id="reviews" class="padding">

    <div class="container">

        <div class="row">

            <div class="col-md-12 wow fadeInDown text-center">

                <h1 class="heading heading_space">GRADUATES OF NOBLE TRAINING ACADEMY - RTO CODE 70201 <span class="divider-center"></span></h1>

                <p>HLT52015 - DIPLOMA OF REMEDIAL MASSAGE; WILL NOW BE ADMINISTERED TO THE INDIVIDUAL PRIVATE HEALTH

                    FUNDS FOR THE PURPOSES OF GAINING APPROVED PROVIDER STATUS. GRADUATES HAVE THE OPTION OF BEING

                    ADMINISTERED BY ANY OF THE FOLLOWING ASSOCIATIONS, HOWEVER ITS NOT GUARANTEED BY THE RTO THAT YOU

                    WILL GET IT AS IT IS SUBJECT TO APPROVAL BY THE ASSOCIATIONS POLICY-</p>

                <div style="padding: 15px 0px;"></div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-4 d-flex justify-content-center" style="padding: 15px 0px;">

                <img src="{{ asset('assets/images/logo/FCMA.png') }}" alt="FCMA" class="img-responsive border_radius" width="150">

            </div>
            <div class="col-md-4 d-flex justify-content-center" style="margin-top:80px">

                <img src="{{ asset('assets/images/logo/cmasa.jpg') }}" alt="FCMA" class="img-responsive border_radius" width="150">

            </div>

            <div class="col-md-4 d-flex justify-content-center" style="margin-top:80px"">

                    <img src=" {{ asset('assets/images/logo/MAA.png') }}" alt="MAA" class="img-responsive border_radius" width="150">

            </div>

        </div>

    </div>

</section>


<!--Edupay TLC Section-->

<section id="" class="wow fadeInUp animated">

    <div class="container">

        <div class="row">

            <div class="col-md-12 d-flex justify-content-center">

                <a href="https://lifestyle.tlc.com.au/apply-now-edupay/?amount=5000&purpose=Education&prnid=MjQ5Nw==" target="_blank">
                    <img src="{{ asset('assets/images/logo/payment.jpeg') }}" alt="edupay logo" class="img-responsive border_radius">
                </a>
            </div>

        </div>

    </div>

</section>

<div class="row">
    <div>
        <div class="widget heading_space">
            <div class="w-100 d-flex justify-content-center align-tiems-center">
                <div class="accordion-width">
                    <h3 class="bottom20">Frequently Ask Questions</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#A" aria-expanded="false" aria-controls="A">
                                    How will I be assessed on the course?
                                </h4>
                            </div>
                            <div id="A" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>
                                        You have the option to attend <strong>face-to-face</strong> or <strong>online</strong> classes in any course.
                                        <br>
                                        You have to attend the classes and pass rigorous assessment tests to obtain the qualification. Authorised assessors will test your skills and knowledge through assignments, quizzes and practical tasks.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#B" aria-expanded="false" aria-controls="B">
                                        Do I need to purchase any textbooks?
                                    </h4>
                                </h4>
                            </div>
                            <div id="B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>
                                        We will provide you with all the necessary tools and resources, including the textbooks for every course.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#C" aria-expanded="false" aria-controls="C">
                                        Is work experience provided while on the course?
                                    </h4>
                                </h4>
                            </div>
                            <div id="C" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>
                                        Yes, we are partnered with well-known businesses to teach you the practical applications of what you will learn.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-top: 5px">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#D" aria-expanded="false" aria-controls="D">
                                    Does NTA have any qualifications in hairdressing?
                                </h4>
                            </div>
                            <div id="D" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>Yes, we do. We offer the <strong>Certificate III in Hairdressing</strong>. It is a nationally recognised qualification that will add great value to your career as a hairdresser in Australia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-top: 5px">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#E" aria-expanded="false" aria-controls="E">
                                    What makes your students consistently in demand by industry leaders?
                                </h4>
                            </div>
                            <div id="E" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <p>
                                        We are partnered with some of the most reputed businesses in the massage and grooming industry in Australia. We maintain a very high standard in our courses and teach the most sought-after skills. Therefore, students who obtain their certification from NTA are always in high demand.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#A" aria-expanded="false" aria-controls="A">
                                               Are your certifications nationally recognised?
                                            </h4>
                                        </div>
                                        <div id="A" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p>
                                                Yes, they are. We are a Recognised Training Organisation (RTO) regulated by the Australian Skills Quality Authority (ASQA). You can rely on our experienced instructors who will make sure that you learn the right job skills and get formally qualified.  
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <h4 class="panel-title" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#B" aria-expanded="false" aria-controls="B">
                                                   How will a recognised qualification help my career?  
                                                </h4>
                                            </h4>
                                        </div>
                                        <div id="B" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>
                                                  A recognised qualification will certify your skills after they have been compared with the industry standard. As a qualified individual, you will have the following benefits:  

                                                    <ul style="list-style: disc; margin-left:40px">
                                                        <li>Up-to-date knowledge and skills</li>
                                                        <li>Better reputation in the industry</li>
                                                        <li>More career opportunities</li>
                                                        <li>Higher-paying job offers</li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <h4 class="panel-title" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#C" aria-expanded="false" aria-controls="C">
                                                  What are the options that NTA provides to get certified?
                                                </h4>
                                            </h4>
                                        </div>
                                        <div id="C" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p>
                                                   We have three options for the students to obtain a qualification:
                                                    <ul style="list-style: disc; margin-left:40px">
                                                        <li>Face-to-face classes</li>
                                                        <li>Online classes</li>
                                                        <li>Recognition of Prior Learning (RPL)</li>
                                                    </ul>
                                                    <br>
                                                    You can choose any one of these options to get assessed and obtain the qualification.   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default" style="margin-top: 5px">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#D" aria-expanded="false" aria-controls="D">
                                              What is the difference between a hairdresser and a hair stylist?    
                                            </h4>
                                        </div>
                                        <div id="D" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                <p>
                                               A hairdresser is someone who can arrange and cut hair in different styles.
                                               <br>
                                               <br>
                                               On the other hand, the more experienced hairstylists provide consultation to their clients about hair grooming and fashion trends.
                                               <br>
                                               <br>
                                               Most hairstylists start their careers as hairdressers. After having sufficient skills and experience in the field, they become hairstylists. Most salons in Australia will have both of these positions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default" style="margin-top: 5px">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h4 class="panel-title" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#E" aria-expanded="false" aria-controls="E">
                                                What are the skills that I will learn on a hairdressing course?  
                                            </h4>
                                        </div>
                                        <div id="E" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingFive">
                                            <div class="panel-body">
                                                <p>
                                              You will get to learn about various topics related to a course like the Certificate III in Hairdressing, such as:

                                              <ul style="list-style: disc; margin-left:40px">
                                                <li>Cutting methods and techniques  </li>
                                                <li>Hair styles for special occasions </li>
                                                <li>Different colour techniques  </li>
                                                <li>Shampoo and basin services </li>
                                                <li>Types of wigs and their applications </li>
                                                <li>>Salon financial transactions</li>
                                              </ul> 
                                            
                                            </p>
                                                                                                                                         
                                            </div>
                                        </div>
                                    </div>                               
                                    <div class="panel panel-default" style="margin-top: 5px">
                                        <div class="panel-heading" role="tab" id="headingSix">
                                            <h4 class="panel-title" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#F" aria-expanded="false" aria-controls="F">
                                                What are the skills that I will learn on a remedial massage therapy course?
                                            </h4>
                                        </div>
                                        <div id="F" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingSix">
                                            <div class="panel-body">
                                                <p>
                                                    In a remedial massage therapy course like the Diploma of Remedial Massage, you will learn about different advanced topics, such as:
                                                    <br>
                                                    <ul style="list-style: disc; margin-left:40px">
                                                        <li>Identifying the client’s massage needs </li>
                                                        <li>Musculoskeletal assessments</li>
                                                        <li>Massage therapy techniques</li>
                                                        <li>Remedial massage treatments</li>
                                                        <li>Safety and hygiene</li>    
                                                        <li>Preventing infections</li>    
                                                    </ul>  
                                                </p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default" style="margin-top: 5px">
                                        <div class="panel-heading" role="tab" id="headingSeven">
                                            <h4 class="panel-title" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#G" aria-expanded="false" aria-controls="G">
                                                Is there any benefit to having a qualification if I want to open my own spa or salon?  
                                            </h4>
                                        </div>
                                        <div id="G" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingSeven">
                                            <div class="panel-body">
                                                <p>
                                               Having a relevant recognised qualification will definitely help you open your own business in the grooming or massage industry in Australia.
                                               <br>
                                               <br>
                                               As a qualified individual, you will know how to properly run a business. You will also have a better reputation in the industry.
                                               <br>
                                               <br>
                                               Therefore, we highly recommend having a recognised qualification if you want to open a spa or salon.
                                                </p>
                                            </div>
                                        </div>
                                    </div> --}}

    </div>
</div>
</div>


<section id="news" class="padding">

    <div class="container">

        <div class="card mb-3" style="border: 0px;">

            <div class="row no-gutters">

                <div class="col-md-4">
                    <img src="{{ asset('assets/images/form/form.jpg') }}" class="card-img" alt="contact from" width="100%">
                </div>

                <div class="col-md-8">

                    <div class="card-body">

                        <h1 class="heading" style="padding: 5px 0;">How Can We Help?<span class="divider-left"></span></h1>

                        <div style="padding: 20px 0px; margin: 0">

                            <p>We'd love to hear from you, please drop us a line if you have any query. We'll do our

                                best to get back to you as soon as possible.</p>

                        </div>

                        <form class="form-inline findus" id="contact-form" method="POST" action="{{ route('contactus') }}">

                            @csrf

                            <div class="row">

                                <div class="col-md-12">

                                    <div id="result"></div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6 col-sm-6">

                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>

                                    </div>

                                </div>

                                <div class="col-md-6 col-sm-6">

                                    <div class="form-group">

                                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>

                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="subject" name="subject" id="website" required>

                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <textarea placeholder="Comment" name="message" id="message"></textarea>

                                </div>

                                <div class="col-md-12">

                                    <button type="submit" class="btn_common yellow border_radius" id="btn_submit">Submit</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>




<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org/"
        , "@type": "CollegeOrUniversity"
        , "contactPoint": "https://www.nta.nsw.edu.au/contact-us"
        , "description": "Recognition of Prior Learning (RPL) Certificate in Australia"
        , "image": "https://nta.nsw.edu.au/public/assets/images/logo/nta_logo.png"
        , "keywords": "Recognition of Prior Learning (RPL) Certificate in Australia"
        , "map": "https://goo.gl/maps/uvoZsSn8JPnCii3q9"
        , "name": "Noble Training Academy"
        , "potentialAction": "Recognition of Prior Learning (RPL) Certificate in Australia"
        , "url": "https://www.nta.nsw.edu.au/"
    }

</script>

@endsection
