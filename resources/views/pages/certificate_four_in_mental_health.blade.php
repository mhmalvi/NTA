@extends('layouts.app')
@section('title', 'Certificate IV in Child, Youth and Family Intervention')

@push('seo')

<meta name="description" content="With this hairdressing course certification, you can get started on your way to a promising career in hairdressing. Which will help you to work as a hairdresser in a salon with confidence" />

@endpush

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 style="color: #fff;">CHC43315 - Certificate IV in Mental Health</h1>



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
                            This qualification reflects the role of workers who provide self-directed recovery oriented support for people affected by mental illness and psychiatric disability. Work involves implementing community based programs and activities focusing on mental health, mental illness and psychiatric disability. Work is undertaken in a range of community contexts such as community based non-government organisations; home based outreach; centre-based programs; respite care; residential services, rehabilitation programs; clinical settings; or supporting people in employment. Work is carried out autonomously under the broad guidance of other practitioners and professionals.



                        </p>
                        <p class="bottom25 text-justify">
                            To achieve this qualification, the candidate must have completed at least 80 hours of work as detailed in the Assessment Requirements of units of competency.

                        </p>
                        <p class="bottom25 text-justify">

                            No licensing, legislative, regulatory or certification requirements apply to this qualification at the time of publication.





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
                        <p>16 units must be completed:</p>
                        <p>- 11 core units</p>
                        <p>4 elective units, consisting of:</p>

                        <p>- at least 2 units from the electives listed below, including at least 1 unit from the At Risk group below</p>


                        <p>up to 2 units from any endorsed Training Package or accredited course – these units must be relevant to the work outcome</p>
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
                        {{-- <div class="widget heading_space">
                            <h3 class="bottom20">Frequently Ask Questions</h3>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#faqA" aria-expanded="false" aria-controls="faqA">
                                            What is the time of admission for Beauty therapy course?
                                        </h4>
                                    </div>
                                    <div id="faqA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p>
                                                This course has more than one intake each Semester and you will commence
                                                at the next available intake.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#faqB" aria-expanded="false" aria-controls="faqB">
                                            What is the Professional Outcomes of this course?
                                        </h4>
                                    </div>
                                    <div id="faqB" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>
                                                Completing this course will equip you with:
                                            </p>
                                            <ul>
                                                <li>Skills to work effectively in a salon environment as an apprentice
                                                </li>
                                                <li>A trade qualification</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#faqc" aria-expanded="false" aria-controls="faqc">
                                            What is the Employment Outcomes of this course?
                                        </h4>
                                    </div>
                                    <div id="faqc" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>
                                                Hairdressing courses at NTA train you for work as a hairdresser
                                                apprentice, barber, salon assistant, or salon owner. You'll learn how to
                                                cut, barber, style, perm, straighten, and color hair, among other
                                                things. Complex color correction, hair extensions, chemical reformation,
                                                and trichology are examples of advanced skills. Our professional salons
                                                give you experience with real customers in a well-equipped facility.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#faqD" aria-expanded="false" aria-controls="faqD">
                                            What you need to know about studying as an International student
                                        </h4>
                                    </div>
                                    <div id="faqD" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>
                                                As an international student, you'll study in a classroom with other
                                                international and Australian students at one of our campus locations. In
                                                addition to your usual class hours, you will be expected to do
                                                additional research on your own time. The price is for international
                                                students on a student visa. If you're visiting Australia on a
                                                non-student visa, please contact us directly for the price applicable to
                                                you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <aside class="col-sm-4 wow fadeIn" data-wow-delay="400ms">
                <div class="widget heading_space">
                    {{-- <button type="button" class="rpl-btn rpl-btn-default" data-toggle="rpl-modal" id="toggle-modal">
                            <lord-icon
                                src="https://cdn.lordicon.com//pndvzexs.json"
                                trigger="loop"
                                colors="primary:#002B46,secondary:#002B46"
                                class="lord-icon-size">
                            </lord-icon>
                            Click Here For Your Free Skill Check
                        </button> --}}
                    <a href="https://lifestyle.tlc.com.au/apply-now-edupay/?amount=5000&purpose=Education&prnid=MjQ5Nw==" target="_blank" class="btn btn-lg btn-info btn-custom" role="button" style="background:#fb963f">Apply for Payment Plan</a>
                    <a href="{{url('/check-your-rpl-eligibility')}}" target="_blank" class="btn btn-lg btn-primary btn-custom" role="button">Check Your RPL Eligibility</a>
                    <h3 class="bottom20">Core units</h3>
                    <div class="media">
                        <div class="media-body">
                            <table class="table">
                                <tbody>
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
                                            <p>
                                                Promote Aboriginal and/or Torres Strait Islander cultural safety</p>



                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCLEG001</p>



                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Work legally and ethically</p>



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
                                            <p>CHCMHS007</p>



                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Work effectively in trauma informed care</p>



                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS008</p>



                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Promote and facilitate self advocacy</p>



                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>CHCMHS011</p>



                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Assess and promote social, emotional and physical wellbeing</p>



                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>HLTWHS001</p>



                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Participate in workplace health and safety</p>



                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBSSC002</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Incorporate knowledge of body structures and functions into beauty therapy</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBXCCS005</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Maintain health and wellbeing in a personal services setting</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBXCCS006</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Promote healthy nutritional options in a beauty therapy context</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBXCCS007</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Conduct salon financial transactions</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBXCCS008</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide salon services to clients</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBXIND003</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Comply with organisational requirements within a personal services environment</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBXWHS003</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Apply safe hygiene, health and work practices</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SIRXOSM002</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Maintain ethical and professional standards when using social media and online platforms</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SIRXSLS001</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Sell to the retail customer</p>

                                        </td>
                                    </tr> --}}
                                    {{-- <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBXWHS001</p>
                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Apply safe hygiene, health and work practices</p>
                                        </td>
                                    </tr> --}}
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
                                    At Risk electives
                                </h4>
                            </div>
                            {{-- <p>One of the following units must be selected for this qualification</p> --}}

                            <div id="A" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul>
                                        <li class="nta_course"><strong>CHCCCS003</strong> -


                                            Increase the safety of individuals at risk of suicide</li>




                                        <li class="nta_course"><strong>CHCCCS019</strong> -

                                            Recognise and respond to crisis situations</li>





                                        {{-- <li class="nta_course"><strong>SHBHDES004</strong> - Create classic long hair up-styles</li> --}}

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#B" aria-expanded="false" aria-controls="B">
                                        Other electives
                                    </a>
                                </h4>
                            </div>
                            <div id="B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul>
                                        <li class="nta_course"><strong>
                                                CHCADV001</strong> - Facilitate the interests and rights of clients</li>



                                        <li class="nta_course"><strong>CHCAGE001</strong> - Facilitate the empowerment of older people</li>





                                        <li class="nta_course"><strong>CHCAOD001</strong> - Work in an alcohol and other drugs context</li>
                                        <li class="nta_course"><strong>CHCAOD002</strong> - Work with clients who are intoxicated</li>



                                        <li class="nta_course"><strong>CHCAOD004</strong> - Assess needs of clients with alcohol and other drugs issues</li>



                                        <li class="nta_course"><strong>CHCAOD005</strong> - Provide alcohol and other drugs withdrawal services</li>



                                        <li class="nta_course"><strong>CHCAOD006</strong> - Provide interventions for people with alcohol and other drugs issues</li>



                                        <li class="nta_course"><strong>CHCCCS004</strong> -
                                            Assess co-existing needs</li>



                                        <li class="nta_course"><strong>CHCCCS007</strong> - Develop and implement service programs</li>



                                        <li class="nta_course"><strong>CHCCCS009</strong> -
                                            Facilitate responsible behaviour</li>



                                        <li class="nta_course"><strong>CHCCCS014</strong> -
                                            Provide brief interventions</li>



                                        <li class="nta_course"><strong>CHCCCS017</strong> -
                                            Provide loss and grief support</li>



                                        <li class="nta_course"><strong>CHCCCS018</strong> -
                                            Provide suicide bereavement support</li>



                                        <li class="nta_course"><strong>CHCCCS020</strong> - Respond effectively to behaviours of concern</li>



                                        <li class="nta_course"><strong>CHCCCS023</strong> - Support independence and wellbeing</li>



                                        <li class="nta_course"><strong>CHCCCS027</strong> -
                                            Visit client residence</li>



                                        <li class="nta_course"><strong>CHCCDE002</strong> - Develop and implement community programs</li>



                                        <li class="nta_course"><strong>CHCCDE004</strong> -

                                            Implement participation and engagement strategies</li>

                                        <li class="nta_course"><strong>CHCCDE006</strong> -


                                            Work to empower Aboriginal and/or Torres Strait Islander communities</li>


                                        <li class="nta_course"><strong>CHCCDE007</strong> -


                                            Develop and provide community projects</li>


                                        <li class="nta_course"><strong>CHCCOM002</strong> -


                                            Use communication to build relationships</li>


                                        <li class="nta_course"><strong>CHCDFV001</strong> -


                                            Recognise and respond appropriately to domestic and family violence</li>


                                        <li class="nta_course"><strong>CHCDIS007</strong> -


                                            Facilitate the empowerment of people with disability</li>


                                        <li class="nta_course"><strong>CHCDIS008</strong> -


                                            Facilitate community participation and social inclusio</li>


                                        <li class="nta_course"><strong>CHCEDU001</strong> -


                                            Provide community focused health promotion and prevention strategies</li>


                                        <li class="nta_course"><strong>CHCEDU002</strong> -


                                            Plan health promotion and community intervention</li>


                                        <li class="nta_course"><strong>CHCEDU005</strong> -


                                            Work with clients to identify financial literacy education needs</li>

                                        <li class="nta_course"><strong>CHCEDU006</strong> -


                                            Improve clients’ fundamental financial literacy skills</li>
                                        <li class="nta_course"><strong>CHCEDU007</strong> -



                                            Provide group education on consumer credit and debt</li>

                                        <li class="nta_course"><strong>CHCEDU008</strong> -



                                            Share health information</li>

                                        <li class="nta_course"><strong>CHCEDU009</strong> -



                                            Provide parenting, health and well-being education</li>

                                        <li class="nta_course"><strong>CHCFAM010</strong> -



                                            Provide intervention support to families</li>

                                        <li class="nta_course"><strong>CHCMGT001</strong> -



                                            Development, implement and review quality framework</li>

                                        <li class="nta_course"><strong>CHCMHS006</strong> -



                                            Facilitate the recovery process with the person, family carers</li>

                                        <li class="nta_course"><strong>CHCPOL001</strong> -



                                            Contribute to the review and development of policies</li>

                                        <li class="nta_course"><strong>CHCPRP001</strong> -



                                            Develop and maintain networks and collaborative partnerships</li>

                                        <li class="nta_course"><strong>CHCPRP003</strong> -



                                            Reflect on and improve own professional practice</li>

                                        <li class="nta_course"><strong>CHCPRT002</strong> -



                                            Support the rights and safety of children and young people</li>

                                        <li class="nta_course"><strong>CHCSET001</strong> -



                                            Work with forced migrants</li>

                                        <li class="nta_course"><strong>CHCSET002</strong> -



                                            Undertake bicultural work with forced migrants in Australia</li>

                                        <li class="nta_course"><strong>CHCSOH001</strong> -



                                            Work with people experiencing or at risk of homelessness</li>

                                        <li class="nta_course"><strong>CHCSOH002</strong> -



                                            Manage and maintain tenancy agreements and services</li>

                                        <li class="nta_course"><strong>CHCYTH011</strong> -



                                            Work effectively with young people and their families</li>

                                        <li class="nta_course"><strong>HLTAAP001</strong> -



                                            Recognise healthy body systems</li>

                                        <li class="nta_course"><strong>HLTAID011</strong> -



                                            Provide first aid</li>

                                        <li class="nta_course"><strong>HLTAID013</strong> -



                                            Provide first aid in remote or isolated site</li>

                                        <li class="nta_course"><strong>HLTAID014</strong> -



                                            Provide advanced first aid</li>

                                        <li class="nta_course"><strong>HLTHPS006</strong> -



                                            Assist clients with medication</li>

                                        <li class="nta_course"><strong>HLTHPS010</strong> -



                                            Interpret and use information about nutrition and diet</li>

                                        <li class="nta_course"><strong>HLTOHC001</strong> -



                                            Recognise and respond to oral health issues</li>
                                        <li class="nta_course"><strong>HLTOHC002</strong> -




                                            Inform and support patients and groups about oral health</li>


                                        <li class="nta_course"><strong>HLTOHC003</strong> -




                                            Apply and manage use of basic oral health products</li>

                                        <li class="nta_course"><strong>HLTOHC004</strong> -





                                            Provide or assist with oral hygiene</li>

                                        <li class="nta_course"><strong>HLTWHS006</strong> -




                                            Manage personal stressors in the work environment</li>

                                        <li class="nta_course"><strong>BSBINM201</strong> -




                                            Process and maintain workplace information</li>



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
