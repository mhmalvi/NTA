@extends('layouts.app')
@section('title', 'Diploma of Beauty Therapy')
<title>SHB50121 Diploma of Beauty Therapy</title>
@push('seo')

<meta name="description" content="With this hairdressing course certification, you can get started on your way to a promising career in hairdressing. Which will help you to work as a hairdresser in a salon with confidence" />

@endpush

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 style="color: #fff;">SHB50121 - Diploma of Beauty Therapy </h1>




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
                <img src="{{ asset('assets/images/courses/Diploma-of-Beauty-Therapy.webp') }}" alt="Course" class=" border_radius img-responsive bottom15">


                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="top30 bottom20">Qualification Description</h2>

                        <p class="bottom25 text-justify">
                            This qualification reflects the role of individuals employed as beauty therapists to provide a broad range of beauty therapy treatments and services including facial treatments, body massage and treatments, hair removal, lash and brow treatments, nail and make-up services. This includes consultation with clients to provide beauty advice, recommend beauty treatments and services, and sell retail skincare and cosmetic products.

                        </p>
                        <p class="bottom25 text-justify">
                            These individuals work relatively autonomously and are accountable for personal outputs. Their work involves the self-directed application of knowledge and skills with substantial depth in some areas where judgement is required in planning and selecting appropriate equipment, services and techniques.



                        </p>
                        <p class="bottom25 text-justify">

                            Work is typically conducted in beauty salons and spas.



                        </p>
                        <p class="bottom25 text-justify">

                            The skills in this qualification must be applied in accordance with Commonwealth and State or Territory legislation, Australian standards and industry codes of practice.

                        </p>
                        <p class="bottom25 text-justify">

                            No occupational licensing, certification or specific legislative requirements apply to this qualification at the time of publication.


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
                        <p>29 units must be completed:</p>
                        <p>- 20 core units</p>
                        <p>9 elective units, consisting of:</p>

                        <p>- 1 unit from Group A: Infection control</p>
                        <p>all units from any one of Group B, C, or D:</p>


                        <p>--- Group B: Electrolysis/Diathermy</p>


                        <p>--- Group C: Relaxation Massage</p>
                        <p>--- Group D: Spa Treatments</p>

                        <p>- remaining units from the list below, elsewhere in the SHB Training Package, or any other current training package or accredited course.</p>
                        <h2>Specialisations</h2><br>
                        <p>Packaging Rules for each specialisation:</p>
                        <ol>
                            <li>All units from Group B electives must be selected for award of the Diploma of Beauty Therapy (Electrolysis/Diathermy)</li>

                        </ol>
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
                                            <p>SHBBBOS008*</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide body massages</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBCCS005</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Advise on beauty products and services</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBFAS004</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide lash and brow services</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBFAS005*</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide facial treatments and skin care recommendations</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBFAS006*</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>
                                                Provide specialised facial treatments</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBHRS010</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide waxing services</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBMUP009</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Design and apply make-up</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBNLS007*</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide manicure and pedicare services</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBNLS011</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Use electric file equipment for nail services</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBRES003</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Research and apply beauty industry information</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBSSC001</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Incorporate knowledge of skin structure and functions into beauty therapy</p>

                                        </td>
                                    </tr>
                                    <tr>
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
                                    </tr>
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
                                    Group A – Infection control

                                </h4>
                            </div>
                            <div id="A" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul>
                                        <li class="nta_course"><strong>HLTINF005</strong> -
                                            Maintain infection prevention for skin penetration treatments</li>


                                        <li class="nta_course"><strong>SHBBINF002</strong> - Maintain infection control standards</li>


                                        {{-- <li class="nta_course"><strong>SHBHDES004</strong> - Create classic long hair up-styles</li> --}}

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#B" aria-expanded="false" aria-controls="B">
                                        Group B – Electrolysis/Diathermy

                                    </a>
                                </h4>
                            </div>
                            <div id="B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul>
                                        <li class="nta_course"><strong>
                                                SHBBHRS013*</strong> - Provide hair reduction treatments using electrical currents


                                            and classic men’s haircut structures</li>
                                        <li class="nta_course"><strong>SHBBSKS007*</strong> - Provide diathermy treatments</li>

                                        {{-- <li class="nta_course"><strong>SHBHCUT012</strong> - Shave heads and faces</li> --}}


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                {{-- <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#C" aria-expanded="false" aria-controls="C"> --}}
                                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#C" aria-expanded="false" aria-controls="C">
                                    Group C- Relaxation Massage

                                    {{-- </a> --}}
                                </h4>
                            </div>
                            <div id="C" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <ul>
                                        <li class="nta_course"><strong>
                                                SHBBBOS009*</strong> -
                                            Provide aromatherapy massages</li>


                                        <li class="nta_course"><strong>SHBBBOS010*</strong> -
                                            Use reflexology relaxation techniques in beauty treatments</li>




                                        <li class="nta_course"><strong>SHBBSPA007*</strong> - Provide stone therapy massages</li>




                                        {{-- <li class="nta_course"><strong>SHBHCUT012</strong> - Shave heads and faces</li>
                                        <li class="nta_course"><strong>SHBHDES002</strong> - Braid hair</li>
                                        <li class="nta_course"><strong>SHBHDES004</strong> -
                                            Create classic long hair up-styles</li>
                                        <li class="nta_course"><strong>SHBHDES005</strong> -
                                            Select and apply hair extensions</li>
                                        <li class="nta_course"><strong>SHBHIND002</strong> -
                                            Research and use hairdressing industry information</li>
                                        <li class="nta_course"><strong>SHBHIND004</strong> -
                                            Participate in session styling teams</li>
                                        <li class="nta_course"><strong>SHBHREF001</strong> -
                                            Curl and volumise hair with chemical treatments</li>
                                        <li class="nta_course"><strong>SHBHREF003</strong> -

                                            Straighten and relax hair with protein treatments</li>
                                        <li class="nta_course"><strong>SHBXCCS004</strong> -
                                            Recommend products and services</li>
                                        <li class="nta_course"><strong>SIRRINV001</strong> -
                                            Receive and handle retail stock</li>
                                        <li class="nta_course"><strong>SIRRMER001</strong> -

                                            Produce visual merchandise displays</li> --}}
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                {{-- <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#C" aria-expanded="false" aria-controls="C"> --}}
                                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#D" aria-expanded="false" aria-controls="D">
                                    Group D- Spa Treatments
                                    {{-- </a> --}}
                                </h4>
                            </div>
                            <div id="D" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <ul>
                                        <li class="nta_course"><strong>
                                                SHBBBOS009*</strong> -

                                            Provide aromatherapy massages</li>


                                        <li class="nta_course"><strong>SHBBSPA005</strong> -

                                            Work in a spa therapies framework</li>





                                        <li class="nta_course"><strong>SHBBSPA006</strong> - Provide spa therapies</li>

                                        <li class="nta_course"><strong>SHBBSPA007*</strong> - Provide stone therapy massages</li>







                                        {{-- <li class="nta_course"><strong>SHBHCUT012</strong> - Shave heads and faces</li>
                                        <li class="nta_course"><strong>SHBHDES002</strong> - Braid hair</li>
                                        <li class="nta_course"><strong>SHBHDES004</strong> -
                                            Create classic long hair up-styles</li>
                                        <li class="nta_course"><strong>SHBHDES005</strong> -
                                            Select and apply hair extensions</li>
                                        <li class="nta_course"><strong>SHBHIND002</strong> -
                                            Research and use hairdressing industry information</li>
                                        <li class="nta_course"><strong>SHBHIND004</strong> -
                                            Participate in session styling teams</li>
                                        <li class="nta_course"><strong>SHBHREF001</strong> -
                                            Curl and volumise hair with chemical treatments</li>
                                        <li class="nta_course"><strong>SHBHREF003</strong> -

                                            Straighten and relax hair with protein treatments</li>
                                        <li class="nta_course"><strong>SHBXCCS004</strong> -
                                            Recommend products and services</li>
                                        <li class="nta_course"><strong>SIRRINV001</strong> -
                                            Receive and handle retail stock</li>
                                        <li class="nta_course"><strong>SIRRMER001</strong> -

                                            Produce visual merchandise displays</li> --}}
                                    </ul>
                                </div>
                            </div>


                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                {{-- <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#C" aria-expanded="false" aria-controls="C"> --}}
                                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#E" aria-expanded="false" aria-controls="E">
                                    Group E- General elective units
                                    {{-- </a> --}}
                                </h4>
                            </div>
                            <div id="E" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <ul>
                                        <li class="nta_course"><strong>
                                                BSBESB304</strong> -


                                            Determine resource requirements for new business ventures</li>



                                        <li class="nta_course"><strong>BSBESB401</strong> -


                                            Research and develop business plans</li>






                                        <li class="nta_course"><strong>BSBESB404</strong> - Market new business ventures</li>



                                        <li class="nta_course"><strong>BSBESB406</strong> - Establish operational strategies and procedures for new business ventures</li>
                                        <li class="nta_course"><strong>BSBESB407</strong> - Manage finances for new business ventures</li>
                                        <li class="nta_course"><strong>SHBBBOS011*</strong> - Provide superficial lymph massage treatments</li>



                                        <li class="nta_course"><strong>SHBBCCS006*</strong> - Prepare personalised aromatic plant oil blends for beauty treatments</li>



                                        <li class="nta_course"><strong>SHBBCCS007</strong> - Interpret the chemical composition and physical effects of cosmetic products</li>



                                        <li class="nta_course"><strong>SHBBHRS011*</strong> - Provide female intimate waxing services</li>



                                        <li class="nta_course"><strong>SHBBHRS012*</strong> - Provide male intimate waxing services</li>



                                        <li class="nta_course"><strong>SHBBMUP010</strong> - Design and apply make-up for photography</li>

                                        <li class="nta_course"><strong>SHBBMUP011</strong> - Design and apply remedial camouflage make-up</li>

                                        <li class="nta_course"><strong>SHBBMUP015*</strong> - Apply volume eyelash extensions</li>

                                        <li class="nta_course"><strong>SHBBSKS008*</strong> -
                                            Provide upper body piercings</li>
                                        <li class="nta_course"><strong>SHBBSKS009*</strong> -

                                            Provide micro-dermabrasion treatments</li>
                                        <li class="nta_course"><strong>SHBBSPA008</strong> -


                                            Provide Indian head massages for relaxation</li>

                                        <li class="nta_course"><strong>SIRXOSM003*</strong> -



                                            Use social media and online tools</li>








                                        {{-- <li class="nta_course"><strong>SHBHCUT012</strong> - Shave heads and faces</li>
                                        <li class="nta_course"><strong>SHBHDES002</strong> - Braid hair</li>
                                        <li class="nta_course"><strong>SHBHDES004</strong> -
                                            Create classic long hair up-styles</li>
                                        <li class="nta_course"><strong>SHBHDES005</strong> -
                                            Select and apply hair extensions</li>
                                        <li class="nta_course"><strong>SHBHIND002</strong> -
                                            Research and use hairdressing industry information</li>
                                        <li class="nta_course"><strong>SHBHIND004</strong> -
                                            Participate in session styling teams</li>
                                        <li class="nta_course"><strong>SHBHREF001</strong> -
                                            Curl and volumise hair with chemical treatments</li>
                                        <li class="nta_course"><strong>SHBHREF003</strong> -

                                            Straighten and relax hair with protein treatments</li>
                                        <li class="nta_course"><strong>SHBXCCS004</strong> -
                                            Recommend products and services</li>
                                        <li class="nta_course"><strong>SIRRINV001</strong> -
                                            Receive and handle retail stock</li>
                                        <li class="nta_course"><strong>SIRRMER001</strong> -

                                            Produce visual merchandise displays</li> --}}
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
