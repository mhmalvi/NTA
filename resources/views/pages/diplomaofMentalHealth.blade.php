@extends('layouts.app')
@section('title', 'Diploma of Mental Health')


<title>CHC53315 - Diploma of Mental Health</title>


@push('seo')

<meta name="description" content="With this hairdressing course certification, you can get started on your way to a promising career in hairdressing. Which will help you to work as a hairdresser in a salon with confidence" />

@endpush

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 style="color: #fff;">CHC53315 - Diploma of Mental Health</h1>






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
                <img src="{{ asset('assets/images/courses/supportive-people-encouraging-young-woman-during-g-2023-02-02-20-29-05-utc.jpg') }}" alt="Course" class=" border_radius img-responsive bottom15">

                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="top30 bottom20">Qualification Description</h2>

                        <p class="bottom25 text-justify">
                            This qualification reflects the role of workers who provide services to clients in relation to mental health issues. They can provide counselling, referral, advocacy and education/health promotion services. These workers are required to have high level specialist knowledge, skills and competencies especially in regard to laws affecting people with mental health issues, the range of services available to them and health issues related to mental health.
                        </p>
                        <p>
                            To achieve this qualification, the candidate must have completed at least 160 hours of work as detailed in the Assessment Requirements of units of competency.
                        </p>
                        <br>
                        <div style="width:100%; text-align:center;">
                            <a href="{{url('/check-your-rpl-eligibility')}}" target="_blank" class="btn btn-lg btn-primary btn-custom-in-content" role="button">Check Your RPL Eligibility</a>
                        </div>
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
                        <p>Total number of units = 20</p>


                        <p> 15 core units</p>
                        <p>5 elective units, consisting of:</p>
                        <p>
                            -at least 3 units from the electives listed below

                        </p>
                        <p>- up to 2 units from the electives listed below, any endorsed Training Package or accredited course – these units must be relevant to the work outcome</p>




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
                                            <p>CHCADV005</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide systems advocacy services</p>







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
                                            <p>CHCMHS002</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Establish self-directed recovery relationships</p>







                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS003</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Provide recovery oriented mental health services</p>







                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS004</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Work collaboratively with the care network and other services</p>







                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS005</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide services to people with co-existing mental health and alcohol and other drugs issues</p>







                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS009</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Provide early intervention, health prevention and promotion programs</p>







                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS010</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Implement recovery oriented approaches to complexity</p>







                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS011</p>







                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Assess and promote social, emotional and physical wellbeing</p>







                                        </td>

                                    </tr>



                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS012</p>








                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide support to develop wellness plans and advanced directives</p>








                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS013</p>








                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Implement trauma informed care</p>








                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCPOL003</p>








                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Research and apply evidence to practice</p>








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

                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>HLTWHS004</p>










                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Manage work health and safety</p>










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
                                        <li class="nta_course"><strong>CHCAOD001</strong> -






                                            Work in an alcohol and other drugs context</li>








                                        <li class="nta_course"><strong>CHCAOD002</strong> -





                                            Work with clients who are intoxicated</li>



                                        <li class="nta_course"><strong>CHCAOD003</strong> -





                                            Provide needle and syringe services</li>

                                        <li class="nta_course"><strong>CHCAOD004</strong> -






                                            Assess needs of clients with alcohol and other drugs issues</li>


                                        <li class="nta_course"><strong>CHCAOD005</strong> -






                                            Provide alcohol and other drugs withdrawal services</li>


                                        <li class="nta_course"><strong>CHCAOD006</strong> -






                                            Provide interventions for people with alcohol and other drugs issues</li>


                                        <li class="nta_course"><strong>CHCAOD007</strong> -






                                            Develop strategies for alcohol and other drugs relapse prevention and management</li>


                                        <li class="nta_course"><strong>CHCAOD008</strong> -






                                            Provide advanced interventions to meet the needs of clients with alcohol and other drugs issues</li>


                                        <li class="nta_course"><strong>CHCAOD009</strong> -






                                            Develop and review individual alcohol and other drugs treatment plans</li>


                                        <li class="nta_course"><strong>CHCCCS017</strong> -






                                            Provide loss and grief support</li>


                                        <li class="nta_course"><strong>CHCCCS018</strong> -






                                            Provide suicide bereavement support</li>


                                        <li class="nta_course"><strong>CHCCDE004</strong> -






                                            Implement participation and engagement strategies</li>


                                        <li class="nta_course"><strong>CHCCDE006</strong> -






                                            Work to empower Aboriginal and/or Torres Strait Islander communities</li>


                                        <li class="nta_course"><strong>CHCCSL001</strong> -






                                            Establish and confirm the counselling relationship</li>


                                        <li class="nta_course"><strong>CHCCSL003</strong> -






                                            Facilitate the counselling relationship and process</li>


                                        <li class="nta_course"><strong>CHCCSL007</strong> -






                                            Support counselling clients in decision-making processes</li>


                                        <li class="nta_course"><strong>CHCCSM004</strong> -






                                            Coordinate complex case requirements</li>


                                        <li class="nta_course"><strong>CHCDFV006</strong> -






                                            Counsel clients affected by domestic and family violence</li>


                                        <li class="nta_course"><strong>CHCEDU001</strong> -






                                            Provide community focused health promotion and prevention strategies</li>


                                        <li class="nta_course"><strong>CHCGMB001</strong> -






                                            Assess the needs of clients with problem gambling issues</li>


                                        <li class="nta_course"><strong>CHCGMB002</strong> -






                                            Provide counselling for clients with problem gambling issues</li>


                                        <li class="nta_course"><strong>CHCINM001</strong> -






                                            Meet statutory and organisation information requirements</li>


                                        <li class="nta_course"><strong>CHCLLN001</strong> -






                                            Respond to client language, literacy and numeracy needs</li>
                                        <li class="nta_course"><strong>CHCMGT001</strong> -







                                            Develop, implement and review quality framework</li>

                                        <li class="nta_course"><strong>CHCMGT002</strong> -







                                            	Manage partnership agreements with services providers</li>

                                        <li class="nta_course"><strong>CHCMHS006</strong> -







                                            Facilitate the recovery process with the person, family and carers</li>

                                        <li class="nta_course"><strong>CHCPRP001</strong> -







                                            Develop and maintain networks and collaborative partnerships</li>

                                        <li class="nta_course"><strong>CHCPWK006</strong> -







                                            Promote and conduct mental health peer work</li>

                                        <li class="nta_course"><strong>CHCSOH002</strong> -







                                            Manage and maintain tenancy agreements and services</li>

                                        <li class="nta_course"><strong>CHCSOH008</strong> -







                                            Manage head lease</li>

                                        <li class="nta_course"><strong>CHCSOH009</strong> -







                                            Develop quality systems in line with registration standards</li>

                                        <li class="nta_course"><strong>CHCVOL003</strong> -







                                            Recruit, induct and support volunteers</li>

                                        <li class="nta_course"><strong>HLTAAP001</strong> -







                                            	Recognise healthy body systems</li>

                                        <li class="nta_course"><strong>HLTHPS006</strong> -







                                            Assist clients with medication</li>

                                        <li class="nta_course"><strong>HLTHPS010</strong> -







                                            Interpret and use information about nutrition and diet</li>

                                        <li class="nta_course"><strong>HLTWHS006</strong> -







                                            Manage personal stressors in the work environment</li>

                                        <li class="nta_course"><strong>BSBFIM501</strong> -







                                            Manage budgets and financial plans</li>








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
