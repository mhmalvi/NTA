@extends('layouts.app')
{{--@section('title', 'Certificate IV in Beauty Therapy')--}}
<title>SHB40121 - Certificate IV in Beauty Therapy</title>
@push('seo')

<meta name="description" content="With this hairdressing course certification, you can get started on your way to a promising career in hairdressing. Which will help you to work as a hairdresser in a salon with confidence" />

@endpush
@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 style="color: #fff;">SHB40121 - Certificate IV in Beauty Therapy<span style="font-size:20px"></span></h1>



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
                <img src="{{ asset('assets/images/courses/4.Certificate-IV-in-Beauty-Therapy.webp') }}" alt="Course" class=" border_radius img-responsive bottom15">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="top30 bottom20">Qualification Description</h2>
                        {{-- <p class="bottom25 text-justify">
                                The beauty care industry is one of Australia's fastest growing consumer industries, and the
                                number of Beauty Therapists is projected to increase dramatically by 2023, with about 25,000
                                job openings.
                            </p> --}}
                        <p class="bottom25 text-justify">
                            This qualification reflects the role of individuals who work as beauty therapists to provide a range of beauty therapy treatments and services, including lash and brow treatments, nail services, make-up, massage and waxing. They communicate with clients to recommend treatments and services, and sell retail skin care and cosmetic products.


                        </p>
                        <p class="bottom25 text-justify">
                            These individuals undertake work independently, with limited guidance from others, to perform routine and non-routine activities and solve non-routine problems. They apply and adapt technical skills and knowledge and use judgment in the provision of beauty treatments and services. These individuals are responsible for their own outputs and provide limited guidance to others.


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


                        <br />
                        <div style="width:100%; text-align:center;">
                            <a href="{{url('/check-your-rpl-eligibility')}}" target="_blank" class="btn btn-lg btn-primary btn-custom-in-content" role="button">Check Your Eligibility For RPL</a>
                        </div>
                        {{-- <div>
                                <p>
                                    <strong>Learn New Skills</strong>
                                </p>
                                <p> You will learn and expand your skills in the following areas through theoretical and practical course work:</p>
                                <p>- A range of massage techniques</p>
                                <p>- Facial techniques including exfoliation and facial massage</p>
                                <p>- Nail treatments including manicure and pedicure</p>
                                <p>- Skin analysis individualised to the skin type and concerns of your client</p>
                                <p>- Spray tanning</p>
                                <p>- Waxing </p>
                                <p>- Facials and specialised facials</p>
                                <p>- Retail and sales operations</p>
                                <p>- Eye lash extensions</p>
                                <p>- Lash and brows</p>
                            </div>
                            
                            <br/>
                            
                            <div>
                                <p>
                                    <strong>Develop Your Telent</strong>
                                </p>
                                <p>Polish and set your skills to get ahead in this industry:</p>
                                <p>- People skills to help clients feel comfortable and at ease</p>
                                <p>- Strong communication skills</p>
                                <p>- The ability to manage time effectively</p>
                                <p>- High levels of discretion and professional integrity</p>
                            </div> --}}

                        <br />

                        {{-- <div>
                                <p>
                                    <strong>Job opportunity:</strong>
                                </p>
                                <p>- Senior Beauty Therapist</p>
                                <p>
                                    - Freelance Make-up Artist at retail cosmetic counters, fashion and media sets, or photography studios
                                </p>
                            </div> --}}
                    </div>
                </div>
                <div class="bottom15"></div>
                {{-- <div class="row">
                    <div class="col-sm-12">
                        <h2 class="package_rules">Packaging Rules</h2>
                        23 units must be completed:

                        <p>- 18 core units</p>
                        <p>- 5 elective units, consisting of:</p>

                        <p>- 1 unit from Group A: Infection control</p>

                        <p>- at least 2 units from Group B: Elective units</p>

                        <p>
                            - up to 2 units from the list below, elsewhere in the SHB Training Package, or any other current Training Package or accredited course.
                        </p>
                    </div>
                </div> --}}

                <h2>Entry Requirements</h2><br>
                <P class="&#xA;                ait4">There are no entry requirements for this qualification.</P>
                <h2>Packaging Rules</h2><br>
                <P class="&#xA;                ait4">23 units must be completed:</P>
                <ul class='ait13'>
                    <li>18 core units</li>
                    <li>5 elective units, consisting of:</li>
                </ul>
                <ul class='ait14'>
                    <li>1 unit from Group A: Infection control</li>
                    <li>at least 2 units from Group B: Elective units </li>
                    <li>up to 2 units from the list below, elsewhere in the SHB Training Package, or any other current Training Package or accredited course.</li>
                </ul>
                <P class="&#xA;                ait4">The selection of electives must be guided by the job outcome sought, local industry requirements and the complexity of skills appropriate to the AQF level of this qualification.</P>
                <P class="&#xA;                ait1021843">Note: Units marked with an *asterisk include one or more prerequisite units of competency. Please refer to each individual unit for details of prerequisites. </P>


                <br>
                <br>
                {{-- <div class="d-flex">
                        <button type="button" class="btn_common yellow border_radius" data-toggle="modal"
                            data-target="#applyNow"
                            onclick="event.preventDefault(); applyNow('Certificate IV in Beauty Therapy');">Apply
                            Now</button>
                    </div> --}}
                <a href="{{url('/check-your-rpl-eligibility')}}" target="_blank" class="btn btn-lg btn-primary btn-custom-in-content" role="button">Apply Now</a>
                <br />
                <br />
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget heading_space">
                            <h3 class="bottom20">Frequently Ask Questions</h3>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#A" aria-expanded="false" aria-controls="A">
                                            What is the time of admission for Beauty therapy course?

                                        </h4>
                                    </div>
                                    <div id="A" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p>
                                                This course has more than one intake each Semester and you will commence at the next available intake.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#B" aria-expanded="false" aria-controls="B">
                                                What is the Professional Outcomes of this course?

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>
                                                Completing this course will equip you with:

                                                Skills to work effectively in a salon environment as an apprentice
                                                A trade qualification

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#C" aria-expanded="false" aria-controls="C">
                                                What is the Employment Outcomes of this course?

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="C" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>
                                                Hairdressing courses at NTA train you for work as a hairdresser apprentice, barber, salon assistant, or salon owner. You'll learn how to cut, barber, style, perm, straighten, and color hair, among other things. Complex color correction, hair extensions, chemical reformation, and trichology are examples of advanced skills. Our professional salons give you experience with real customers in a well-equipped facility.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#D" aria-expanded="false" aria-controls="C">
                                                What you need to know about studying as an International student
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="D" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>
                                                As an international student, you'll study in a classroom with other international and Australian students at one of our campus locations. In addition to your usual class hours, you will be expected to do additional research on your own time. The price is for international students on a student visa. If you're visiting Australia on a non-student visa, please contact us directly for the price applicable to you.


                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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
                            Check Yout Eligibility For RPL
                        </button> --}}
                    <a href="https://lifestyle.tlc.com.au/apply-now-edupay/?amount=5000&purpose=Education&prnid=MjQ5Nw==" target="_blank" class="btn btn-lg btn-info btn-custom" role="button" style="background:#fb963f">Apply for Payment Plan</a>
                    <a href="{{url('/check-your-rpl-eligibility')}}" target="_blank" class="btn btn-lg btn-primary btn-custom" role="button">Check Your Eligibility For RPL</a>

                    <h3 class="bottom20">Core units</h3>
                    <b>Note: Units marked with an *asterisk include one or more prerequisite units of competency. Please refer to each individual unit for details of prerequisites.</b>

                    <div class="media">
                        <div class="media-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBBOS007 </p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Apply cosmetic tanning products</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBBOS008*</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide body massages</p>
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBBBOS003</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Provide body treatments</p>
                                            </td>
                                        </tr> --}}
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
                                            <p>Use electric file equipment for nail services</p>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBBFAS005* </p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide facial treatments and skin care recommendations</p>
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
                                            <p>SHBBNLS007* </p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Provide manicure and pedicare services</p>
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
                                            <p>
                                                Incorporate knowledge of skin structure and functions into beauty therapy</p>

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
                                            <p>SHBXCCS006</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Promote healthy nutritional options in a beauty therapy context</p>

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
                                            <p>SHBXCCS008 </p>

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
                                            <p>Comply with organisational requirements within a personal services
                                                environment</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:middle">
                                            <p>SHBXWHS003</p>

                                        </td>
                                        <td style="vertical-align:middle">
                                            <p>Apply safe hygiene, health and work practices</p>
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
                                            <p>
                                                Sell to the retail customer</p>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="widget heading_space">
                    <h3 class="bottom20">Elective units</h3>
                    <h4><b>Group A: Infection control</b></h4>

                    <table class="table">
                        <tbody>

                            <tr>
                                <td style="vertical-align:middle">
                                    <p>HLTINF005</p>

                                </td>
                                <td style="vertical-align:middle">
                                    <p>Maintain infection prevention for skin penetration treatments</p>

                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">
                                    <p>SHBBINF002</p>

                                </td>
                                <td style="vertical-align:middle">
                                    <p>Maintain infection control standards</p>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h4><b>Group B: General elective units</b></h4>


                    <table class="table">
                        <tbody>
                            {{-- <tr>
                                <td style="vertical-align:middle">
                                    <p>SHBBHRS004</p>
                                </td>
                                <td style="vertical-align:middle">
                                    <p>Provide hair reduction treatments using electrical currents</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">
                                    <p>SHBBINF001</p>
                                </td>
                                <td style="vertical-align:middle">
                                    <p>Maintain infection control standards</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">
                                    <p>SHBBSKS002</p>
                                </td>
                                <td style="vertical-align:middle">
                                    <p>Provide diathermy treatments</p>
                                </td>
                            </tr>
                            <tr> --}}
                            <td style="vertical-align:middle">
                                <p>SHBBBOS004</p>
                            </td>
                            <td style="vertical-align:middle">
                                <p>Provide aromatherapy massages</p>
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
                                    <p>SHBBMUP008</p>

                                </td>
                                <td style="vertical-align:middle">
                                    <p>Apply eyelash extensions</p>

                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">
                                    <p>SHBBMUP010</p>

                                </td>
                                <td style="vertical-align:middle">
                                    <p>
                                        Design and apply make-up for photography</p>

                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">
                                    <p>SHBBMUP011</p>

                                </td>
                                <td style="vertical-align:middle">
                                    <p>Design and apply remedial camouflage make-up</p>

                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">
                                    <p>SHBBNLS008*</p>

                                </td>
                                <td style="vertical-align:middle">
                                    <p>Apply gel and dip powder nail enhancements</p>

                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">
                                    <p>SHBBNLS009*</p>

                                </td>
                                <td style="vertical-align:middle">
                                    <p>Apply acrylic nail enhancements</p>

                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">
                                    <p>SHBBNLS010*</p>

                                </td>
                                <td style="vertical-align:middle">
                                    <p>Apply nail art</p>

                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">
                                    <p>SHBBNLS012*</p>

                                </td>
                                <td style="vertical-align:middle">
                                    <p>Apply advanced nail art</p>

                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">
                                    <p>SIRXOSM003*</p>

                                </td>
                                <td style="vertical-align:middle">
                                    <p>
                                        Use social media and online tools</p>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- Courses -->
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
