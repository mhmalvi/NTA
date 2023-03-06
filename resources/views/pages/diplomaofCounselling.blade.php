@extends('layouts.app')
@section('title', 'Diploma of Counselling')




@push('seo')

<meta name="description" content="With this hairdressing course certification, you can get started on your way to a promising career in hairdressing. Which will help you to work as a hairdresser in a salon with confidence" />

@endpush

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 style="color: #fff;">CHC51015 - Diploma of Counselling</h1>




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
                <img src="{{ asset('assets/images/courses/man-and-woman-during-the-psychological-counseling-2022-01-19-00-00-48-utc.jpg') }}" alt="Course" class=" border_radius img-responsive bottom15">

                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="top30 bottom20">Qualification Description</h2>

                        <p class="bottom25 text-justify">
                            This qualification reflects the role of counsellors, who work with clients on personal and psychological issues using established counselling modalities. They use communication, micro-counselling and interviewing skills and draw on varied counselling therapies to assist clients. At this level, the counsellor will be working in defined and supported counselling roles in established agencies rather than in independent practice.






                        </p>

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

                        <p> 13 core units</p>
                        <p>4 elective units, consisting of:</p>

                        <p>- up to 4 units from the electives listed below, any endorsed Training Package or accredited course – these units must be relevant to the work outcome</p>




                        {{-- <p>- plus at least 2 units from Group A or Group B below</p>

                        <p>- up to 2 units from the electives listed below, or any endorsed Training Package or accredited course.</p> --}}

                        <p>All electives chosen must contribute to a valid, industry-supported vocational outcome.</p>
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
                                            <p>CHCCCS019</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Recognise and respond to crisis situations</p>






                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCSL001</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Establish and confirm the counselling relationship</p>






                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCSL002</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Apply specialist interpersonal and counselling interview skills</p>






                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCSL003</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Facilitate the counselling relationship and process</p>






                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCSL004</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Research and apply personality and development theories</p>






                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCSL005</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Apply learning theories in counselling</p>






                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCSL006</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Select and use counselling therapies</p>






                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCSL007</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Support counselling clients in decision-making processes</p>






                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCCSM005</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Develop, facilitate and review all aspects of case management</p>






                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCDIV001</p>






                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Work with diverse people</p>






                                        </td>

                                    </tr>



                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCDIV002</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Promote Aboriginal and/or Torres Strait Islander cultural safety</p>







                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCLEG001</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Work legally and ethically</p>







                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCPRP003</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Reflect on and improve own professional practice</p>







                                        </td>

                                    </tr>
                                    {{-- <tr>
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

                                    </tr> --}}



                            </table>
                        </div>
                    </div>
                </div>
                <div class="widget heading_space">
                    {{-- <h3 class="bottom20">Elective units</h3> --}}
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#A" aria-expanded="false" aria-controls="A">
                                    Elective units



                                </h4>
                            </div>
                            {{-- <p>One of the following units must be selected for this qualification</p> --}}

                            <div id="A" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul>
                                        <li class="nta_course"><strong>CHCADV001</strong> -





                                            Facilitate the interests and rights of clients</li>







                                        <li class="nta_course"><strong>CHCAGE001</strong> -




                                            Facilitate the empowerment older people</li>


                                        <li class="nta_course"><strong>CHCCCS003</strong> -




                                            Increase the safety of individuals at risk of suicide</li>
                                        <li class="nta_course"><strong>CHCCCS014</strong> -





                                            Provide brief interventions</li>

                                        <li class="nta_course"><strong>CHCCCS015</strong> -





                                            Provide individualised support</li>

                                        <li class="nta_course"><strong>CHCCCS017</strong> -





                                            Provide loss and grief support</li>

                                        <li class="nta_course"><strong>CHCCCS018</strong> -





                                            Provide suicide bereavement support</li>

                                        <li class="nta_course"><strong>CHCCCS023</strong> -





                                            Support independence and wellbeing</li>

                                        <li class="nta_course"><strong>CHCDFV001</strong> -





                                            Recognise and respond appropriately to domestic and family violence</li>

                                        <li class="nta_course"><strong>CHCDIV003</strong> -





                                            Promote and manage diversity</li>

                                        <li class="nta_course"><strong>CHCFAM002</strong> -





                                            Work with a child-focused approach</li>

                                        <li class="nta_course"><strong>CHCFAM003</strong> -





                                            Support people to improve relationships</li>

                                        <li class="nta_course"><strong>CHCGMB001</strong> -





                                            Assess the needs of clients with problem gambling issues</li>

                                        <li class="nta_course"><strong>CHCGMB002</strong> -





                                            Provide counselling for clients with problem gambling issues</li>

                                        <li class="nta_course"><strong>CHCGRP002</strong> -





                                            Plan and conduct group activities</li>

                                        <li class="nta_course"><strong>CHCGRP003</strong> -





                                            Plan, facilitate and review psycho-educational groups</li>

                                        <li class="nta_course"><strong>CHCGRP004</strong> -





                                            Deliver structured programs</li>

                                        <li class="nta_course"><strong>CHCMHS001</strong> -





                                            Work with people with mental health issues</li>

                                        <li class="nta_course"><strong>CHCPRT001</strong> -





                                            Identify and respond to children and young people at risk</li>

                                        <li class="nta_course"><strong>CHCPRT004</strong> -





                                            Work effectively in child protection to support children, young people and families</li>

                                        <li class="nta_course"><strong>CHCSET001</strong> -





                                            Work with forced migrants</li>

                                        <li class="nta_course"><strong>CHCSET002</strong> -





                                            Undertake bicultural work with forced migrants in Australia</li>

                                        <li class="nta_course"><strong>CHCYTH001</strong> -





                                            Engage respectfully with young people</li>






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
