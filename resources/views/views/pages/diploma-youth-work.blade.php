@extends('layouts.app')
@section('title', 'Diploma of Youth Work')

<title>CHC50421 - Diploma of Youth Work</title>

@push('seo')

<meta name="description" content="With this hairdressing course certification, you can get started on your way to a promising career in hairdressing. Which will help you to work as a hairdresser in a salon with confidence" />

@endpush

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 style="color: #fff;">CHC50421 - Diploma of Youth Work</h1>


                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ URL::to('/') }}">Home</a> <span><i class="fa fa-angle-double-right"></i>Courses</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->


<!-- Courses -->
<section id="course_all" class="padding-bottom-half padding-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 course_detail wow fadeIn" data-wow-delay="400ms">
                <img src="{{ asset('assets/images/courses/education-black-woman-and-laptop-for-studying-kn-2023-01-13-03-20-47-utc.jpg') }}" alt="Course" class=" border_radius img-responsive bottom15">

                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="top30 bottom20">Qualification Description</h2>

                        <p class="bottom25 text-justify">
                            This qualification reflects the role of people who work in youth work and operate under a broad supervision framework. They work within clearly defined organisational guidelines, with responsibility for the development and the outcomes of programs and services for young people that are managed and designed to meet the social, behavioural, health, wellbeing, developmental and protection needs of young people. This work may be undertaken through employment in community, government and other agencies.





                        </p>
                        <p class="bottom25 text-justify">
                            To achieve this qualification, the candidate must have completed at least 200 hours of work as detailed in the Assessment Requirements of units of competency.



                        </p>
                        <p class="bottom25 text-justify">

                            The skills in this qualification must be applied in accordance with Commonwealth and State or Territory legislation, Australian standards and industry codes of practice.

                        </p>
                        {{-- <p class="bottom25 text-justify">

                            No occupational licensing, certification or specific legislative requirements apply to this qualification at the time of publication.


                        </p> --}}


                        <br>
                        <div style="width:100%; text-align:center;">
                            <a href="{{url('/check-your-rpl-eligibility')}}" target="_blank" class="btn btn-lg btn-primary btn-custom-in-content" role="button">Check Your RPL Eligibility</a>
                        </div>
                        {{-- <div>
                                <p><strong>Learn New Skills</strong></p>
                                <p>Through your on-the-job experience and course work, you will learn:</p>
                                <p>- Ways to unleash your creative skills on women's and men's hair</p>
                                <p>- Cutting methods and techniques</p>
                                <p>- About colours and application techniques</p>
                                <p>- To create special occasion and classic up-styles</p>
                                <p>- Design haircut structures</p>
                            </div>
                            <br>
                            <div>
                                <p><strong>Develop your talent</strong></p>
                                <p>Develop the personal qualities and abilities that will help you advance in this field:</p>
                                <p>- Communication skills to connect with clients</p>
                                <p>- Skills in customer care, teamwork, and consultation</p>
                                <p>- To meet client needs, problem-solving techniques are used.</p>
                                <p>- Explore and develop your creative abilities.</p>
                            </div> --}}
                        <br>
                        <p><strong>Entry requirements</strong></p>
                        <br>
                        <p>There are no entry requirements for this qualification.</p>
                    </div>
                </div>
                <div class="bottom15"></div>
                <div class="row">
                    <div class="col-sm-12">
                        {{-- <h2 class="top30 bottom20">Packaging Rules</h2> --}}
                        <h2 class="package_rules">Packaging Rules</h2>
                        <p>21 units must be completed:</p>

                        <p> 16 core units</p>
                        <p>5 elective units, consisting of:</p>

                        <p>- at least 1 units from Group A below</p>



                        <p>- plus at least 2 units from Group A or Group B below</p>

                        <p>- up to 2 units from the electives listed below, or any endorsed Training Package or accredited course.</p>

                        <p>All electives chosen must contribute to a valid, industry-supported vocational outcome.</p>




                        {{-- <p>--- Group B: Electrolysis/Diathermy</p>


                        <p>--- Group C: Relaxation Massage</p>
                        <p>--- Group D: Spa Treatments</p>

                        <p>- remaining units from the list below, elsewhere in the SHB Training Package, or any other current training package or accredited course.</p> --}}
                        {{-- <h2>Packaging Specialisations</h2><br>
                        <p>Packaging Rules for each specialisation:</p>
                        <ol>
                            <li>All Group A electives must be selected for the award of the Certificate IV in Child, Youth and Family Intervention (Residential and Out of Home Care).</li>
                            <li>All Group B electives must be selected for award of the Certificate IV in Child, Youth and Family Intervention (Family Support).</li>
                        </ol> --}}
                    </div>
                </div>
                <br>
                <br>
                <div class="d-flex">
                    {{-- <button type="button" class="btn_common yellow border_radius" data-toggle="modal"
                            data-target="#applyNow"
                            onclick="event.preventDefault(); applyNow('Certificate III in Hairdressing');">Apply
                            Now</button> --}}
                    <a href="{{url('/check-your-rpl-eligibility')}}" target="_blank" class="btn btn-lg btn-primary btn-custom-in-content" role="button">Apply Now</a>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
            <aside class="col-sm-4 wow fadeIn" data-wow-delay="400ms">
                <div class="widget heading_space">
                    <a href="https://lifestyle.tlc.com.au/apply-now-edupay/?amount=5000&purpose=Education&prnid=MjQ5Nw==" target="_blank" class="btn btn-lg btn-info btn-custom" role="button" style="background:#fb963f">Apply for Payment Plan</a>
                    <a href="{{url('/check-your-rpl-eligibility')}}" target="_blank" class="btn btn-lg btn-primary btn-custom" role="button">Check Your RPL Eligibility</a>
                    <h3 class="bottom20">Core units</h3>
                    <div class="media">
                        <div class="media-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCCS007</p>





                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Develop and implement service programs</p>





                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCOM002</p>





                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Use communication to build relationships</p>





                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCSM013</p>





                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Facilitate and review case management</p>





                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCDEV005</p>





                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Analyse impacts of sociological factors on people in community work and services</p>





                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCDIV001</p>





                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Work with diverse people</p>





                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCDIV002</p>





                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Promote Aboriginal and/or Torres Strait Islander cultural safety</p>





                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCGRP002</p>





                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Plan and conduct group activities</p>





                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCLEG003</p>





                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Manage legal and ethical compliance</p>





                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS001</p>





                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Work with people with mental health issues</p>





                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCPRP001</p>





                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Develop and maintain networks and collaborative partnerships</p>





                                        </td>

                                    </tr>



                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCPRT025</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Identify and report children and young people at risk</p>






                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCYTH013</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Engage respectfully with young people</p>






                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCYTH014</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Work effectively with young people in the youth work context</p>






                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCYTH021</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Support youth programs</p>






                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCYTH024</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Manage service response to young people in crisis</p>






                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>HLTWHS003</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Maintain work health and safety</p>







                                        </td>

                                    </tr>



                            </table>
                        </div>
                    </div>
                </div>
                <div class="widget heading_space">
                    <h3 class="bottom20">Elective units</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#A" aria-expanded="false" aria-controls="A">
                                    Group A: Practice Electives


                                </h4>
                            </div>
                            {{-- <p>One of the following units must be selected for this qualification</p> --}}

                            <div id="A" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul>
                                        <li class="nta_course"><strong>CHCPRT034</strong> -




                                            Work with children and young people with complex trauma and attachment issues and needs</li>






                                        <li class="nta_course"><strong>CHCYTH017</strong> -



                                            Develop and implement procedures to enable young people to address their needs</li>

                                        <li class="nta_course"><strong>CHCYTH022</strong> -



                                            Provide services for the needs and circumstances of young people</li>



                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#B" aria-expanded="false" aria-controls="B">

                                    Group B: General Electives



                                </h4>
                            </div>
                            {{-- <p>One of the following units must be selected for this qualification</p> --}}

                            <div id="B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">

                                <div class="panel-body">
                                    <ul>
                                        <li class="nta_course"><strong>CHCCCS004</strong> -





                                            Assess co-existing needs</li>







                                        <li class="nta_course"><strong>CHCCCS016</strong> -




                                            Respond to client needs</li>


                                        <li class="nta_course"><strong>CHCCCS037</strong> -




                                            Visit client residence</li>
                                        <li class="nta_course"><strong>CHCCDE024</strong> -





                                            Support community action</li>

                                        <li class="nta_course"><strong>CHCCDE025</strong> -





                                            Develop and support community leadership</li>

                                        <li class="nta_course"><strong>CHCCDE028</strong> -





                                            Work within organisation and government structures to enable community development outcomes</li>

                                        <li class="nta_course"><strong>CHCDFV001</strong> -





                                            Recognise and respond appropriately to domestic and family violence</li>

                                        <li class="nta_course"><strong>CHCEDU004</strong> -





                                            Develop, implement and review sexual and reproductive health education programs</li>

                                        <li class="nta_course"><strong>CHCPOL002</strong> -





                                            Develop and implement policy</li>

                                        <li class="nta_course"><strong>CHCVOL003</strong> -





                                            Recruit, induct and support volunteers</li>

                                        <li class="nta_course"><strong>CHCYTH018</strong> -





                                            Work with young people to establish support networks</li>

                                        <li class="nta_course"><strong>CHCYTH019</strong> -





                                            Undertake youth work in specific communities</li>

                                        <li class="nta_course"><strong>CHCYTH020</strong> -





                                            Support young people to take collective action</li>





                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </aside>
        </div>
    </div>
</section>
<!-- Courses -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org/"
        , "@type": "Course"
        , "about": "https://www.nta.nsw.edu.au/"
        , "description": "RPL in Hairdressing"
        , "image": "https://nta.nsw.edu.au/public/assets/images/courses/3.Certificate-III-in-Hairdressing.webp"
        , "name": "Certificate III in Hairdressing"
        , "potentialAction": "RECOGNITION OF PRIOR LEARNING (RPL) CERTIFICATE in Australia"
        , "url": "https://www.nta.nsw.edu.au/certificate-iii-in-hairdressing"
    }

</script>
@endsection

@push('css')
<style>
    .btn-custom {
        border: none;
        background: #3FD4FB;
        color: #fff !important;
        text-transform: uppercase;
        width: 100%;
        margin-bottom: 20px;
        font-weight: 700;
        font-size: 13px;
        /* height: 43px; */
        padding: 15px;
    }

    .btn-custom-in-content {
        border: none;
        background: #3FD4FB;
        color: #fff !important;
        text-transform: uppercase;
        padding: 15px 55px !important;
        margin-bottom: 20px;
        font-weight: 700;
        font-size: 13px;
        /* height: 43px; */
        padding: 15px;
    }

</style>
@endpush
