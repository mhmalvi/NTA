@extends('layouts.app')
@section('title', 'Certificate IV in Leisure and Health')

<title>CHC43415 - Certificate IV in Leisure and Health</title>
@push('seo')

<meta name="description" content="With this hairdressing course certification, you can get started on your way to a promising career in hairdressing. Which will help you to work as a hairdresser in a salon with confidence" />

@endpush

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 style="color: #fff;">CHC43415 - Certificate IV in Leisure and Health</h1>
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
                <img src="{{ asset('assets/images/courses/muslim-mother-and-her-cute-4-aged-daughter-posing-2022-04-28-01-50-19-utc.jpg') }}" alt="Course" class=" border_radius img-responsive bottom15">

                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="top30 bottom20">Qualification Description</h2>

                        <p class="bottom25 text-justify">
                            This qualification reflects the role of workers participating in the design, implementation and evaluation of leisure, health activities and programs for clients in one or more sector areas. Workers may be in residential facilities and/or in community agencies and day centres, completing specialised tasks and functions in relation to leisure and health. While workers are responsible for their own outputs, work is carried out under direct or indirect supervision within defined organisation guidelines.




                        </p>
                        <p class="bottom25 text-justify">
                            To achieve this qualification, the candidate must have completed at least 120 hours of work as detailed in the Assessment Requirements of the units of competency.


                        </p>
                        {{-- <p class="bottom25 text-justify">

                            No occupational licensing, certification or specific legislative requirements apply to this qualification at the time of publication.


                        </p> --}}
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
                        <p>Total number of units = 17</p>

                        <p> 10 core units</p>
                        <p>7 elective units, consisting of:</p>

                        <p>- at least 4 units from the electives listed below</p>


                        <p>- up to 3 units from the electives listed below, any endorsed Training Package or accredited course – these units must be relevant to the work outcome</p>

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
                                            <p>CHCCOM002</p>




                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Use communication to build relationships</p>




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
                                            <p>CHCLAH001</p>




                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Work effectively in the leisure and health industries</p>




                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCLAH002</p>




                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Contribute to leisure and health programming</p>




                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCLAH003</p>




                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Participate in the planning, implementation and monitoring of individual leisure and health programs</p>




                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCLAH004</p>




                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Participate in planning leisure and health programs for clients with complex needs</p>




                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCLAH005</p>




                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Incorporate lifespan development and sociological concepts into leisure and health programming</p>




                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCPRP003</p>




                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Reflect on and improve own professional practice</p>




                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>HLTAAP002</p>




                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Confirm physical health status</p>




                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>HLTWHS002</p>




                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Follow safe work practices for direct client care</p>




                                        </td>
                                    </tr>

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
                                        <li class="nta_course"><strong>CHCAGE001</strong> -



                                            Facilitate the empowerment of older people</li>





                                        <li class="nta_course"><strong>CHCAGE005</strong> -


                                            Provide support to people living with dementia</li>
                                        <li class="nta_course"><strong>CHCAGE005</strong> -


                                            Provide support to people living with dementia</li>
                                        <li class="nta_course"><strong>CHCAOD001</strong> -



                                            Work in an alcohol and other drugs context</li>

                                        <li class="nta_course"><strong>CHCCCS008</strong> -



                                            Develop strategies to address unmet needs</li>

                                        <li class="nta_course"><strong>CHCCCS015</strong> -



                                            Provide individualised support</li>

                                        <li class="nta_course"><strong>CHCCCS020</strong> -



                                            Respond effectively to behaviours of concern</li>

                                        <li class="nta_course"><strong>CHCCCS023</strong> -



                                            Support independence and wellbeing</li>

                                        <li class="nta_course"><strong>CHCCCS025</strong> -



                                            Support relationships with carers and families</li>

                                        <li class="nta_course"><strong>CHCCCS027</strong> -



                                            Visit client residence</li>

                                        <li class="nta_course"><strong>CHCCDE002</strong> -



                                            Develop and implement community programs</li>

                                        <li class="nta_course"><strong>CHCCDE003</strong> -



                                            Work within a community development framework</li>

                                        <li class="nta_course"><strong>CHCDIS002</strong> -



                                            Follow established person-centred behaviour supports</li>

                                        <li class="nta_course"><strong>CHCDIS003</strong> -



                                            Support community participation and social inclusion</li>

                                        <li class="nta_course"><strong>CHCDIS007</strong> -



                                            Facilitate the empowerment of people with disability</li>

                                        <li class="nta_course"><strong>CHCDIV002</strong> -



                                            Promote Aboriginal and/or Torres Strait Islander cultural safety</li>

                                        <li class="nta_course"><strong>CHCHCS001</strong> -



                                            Provide home and community support services</li>

                                        <li class="nta_course"><strong>CHCMHS001</strong> -



                                            Work with people with mental health issues</li>

                                        <li class="nta_course"><strong>CHCMHS002</strong> -



                                            Establish self-directed recovery relationships</li>

                                        <li class="nta_course"><strong>CHCMHS003</strong> -



                                            Provide recovery oriented mental health services</li>

                                        <li class="nta_course"><strong>CHCMHS004</strong> -



                                            Work collaboratively with the care network and other services</li>

                                        <li class="nta_course"><strong>CHCPAL001</strong> -



                                            Deliver care services using a palliative approach</li>

                                        <li class="nta_course"><strong>CHCPRT002</strong> -



                                            Support the rights and safety of children and young people</li>

                                        <li class="nta_course"><strong>CHCSET001</strong> -



                                            Work with forced migrants</li>

                                        <li class="nta_course"><strong>CHCSOH001</strong> -



                                            Work with people experiencing or at risk of homelessness</li>

                                        <li class="nta_course"><strong>CHCVOL003</strong> -



                                            Recruit, induct and support volunteers</li>

                                        <li class="nta_course"><strong>CHCYTH001</strong> -



                                            Engage respectfully with young people</li>

                                        <li class="nta_course"><strong>CHCYTH009</strong> -



                                            Support youth programs</li>

                                        <li class="nta_course"><strong>HLTAID011</strong> -



                                            Provide first aid</li>

                                        <li class="nta_course"><strong>BSBINM201</strong> -



                                            Process and maintain workplace information</li>

                                        <li class="nta_course"><strong>BSBLDR403</strong> -



                                            Lead team effectiveness</li>

                                        <li class="nta_course"><strong>SISCCRO001</strong> -



                                            Plan and conduct recreation programs for older persons</li>

                                        <li class="nta_course"><strong>SISXCAI007</strong> -



                                            Assist with activities not requiring equipment</li>

                                        <li class="nta_course"><strong>SISXDIS001</strong> -



                                            Facilitate inclusion for people with a disability</li>

                                        <li class="nta_course"><strong>SISXDIS002</strong> -




                                            Plan and conduct disability programs</li>







                                        {{-- <li class="nta_course"><strong>SHBHDES004</strong> - Create classic long hair up-styles</li> --}}

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
