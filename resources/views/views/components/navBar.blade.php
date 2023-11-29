<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <span class="info"><i class="icon-phone2"></i>1300 616 123</span>
                    <span class="info"><i class="icon-mail"></i>enquiries@nta.nsw.edu.au</span>
                </div>
                <ul class="social_top pull-right">
                    <li><a href="https://www.facebook.com/NTA.Australia/" class="facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/nta_2020)" class="twitter" target="blank"><i class="icon-twitter4"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCLmvHOEVNr3iG1il_HeXPsg" class="dribble" target="blank"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://www.instagram.com/noble_training_academy/" class="instagram" target="blank"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--Header-->
<style>
    

</style>

<header>
    
    <nav class="navbar navbar-default navbar-sticky bootsnav ">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ URL::to('/') }}">
                    <img src="{{ asset('assets/images/logo/nta_logo.png') }}" class="logo logo-scrolled" alt="" style="width: 200px;">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <!-- <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('faq') }}">FAQs</a></li>-->

                    <!--</ul>
                    </li>
                    </li>-->
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Courses</a>
                        <ul class="dropdown-menu course-dropdown-menu" style="overflow:scroll;height:550px;">



                            <li><a href="{{ route('diplomaInBeauty') }}">SHB50115 - Diploma in Beauty Therapy</a></li>
                            <li><a href="{{ route('diplomaInRemedial') }}">HLT52015 - Diploma in Remedial Massage</a>
                            </li>
                            <li><a href="{{ route('hairdressing') }}">SHB30416 - Certificate III in Hairdressing</a>
                            </li>
                            <li><a href="{{ route('beautyTherapy') }}">SHB40115 - Certificate IV in Beauty Therapy</a>
                            </li>
                            <li><a href="{{ route('hairdressing.four') }}">SHB40216 - Certificate IV in Hairdressing</a>


                            </li>
                            <li><a href="{{ route('diploma_beauty.therapy') }}">SHB50121 - Diploma in Beauty Therapy</a>


                            </li>
                            <li><a href="{{ route('child_youth.family') }}">CHC40321 - Certificate IV in Child, Youth and Family Intervention</a>


                            </li>
                            <li><a href="{{ route('mental.health') }}">CHC40321 - Certificate IV in Mental Health</a>
                            </li>
                            <li><a href="{{ route('leisure.health') }}">CHC43415 - Certificate IV in Leisure and Health</a>






                            </li>
                            <li><a href="{{ route('youth.work') }}">CHC50421 - Diploma of Youth Work</a>








                            </li>
                            <li><a href="{{ route('diploma.counselling') }}">CHC50421 - Diploma of Counselling</a>
                            </li>
                            <li><a href="{{ route('diploma.mental_health') }}">CHC53315 - Diploma of Mental Health</a>


                            </li>
                            <li><a href="{{ route('health.services_assistance') }}">HLT33115 - Certificate III in Health Services Assistance</a>






                            </li>
                            <li><a href="{{ route('health.admin') }}">HLT37315 - Certificate III in Health Administration</a>








                            </li>
                            <li><a href="{{ route('health.service') }}">HLT43021 - Certificate IV in Allied Health Assistance</a>


                            </li>
                            {{-- <li><a href="{{ route('diplomaInBeauty') }}">SHB50121 - Diploma in Beauty Therapy (superseded)</a>

                    </li> --}}
                    {{-- <li><a href="{{ route('diplomaInBeauty') }}">SHB50115 - Diploma in Beauty Therapy(Superseded)</a></li>

                    <li><a href="{{ route('diplomaInRemedial') }}">HLT52015 - Diploma in Remedial Massage (Superseded)</a>

                    </li>
                    <li><a href="{{ route('BeautyTherapy_superseded') }}">SHB40115 - Certificate IV in Beauty Therapy (Superseded)</a> --}}




                    </li>





                </ul>
                </li>
                <li><a href="https://lifestyle.tlc.com.au/apply-now-edupay/?amount=5000&purpose=Education&prnid=MjQ5Nw==">Payment Plan</a>
                </li>
                <li><a href="{{ route('blogs') }}">Blogs</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> Policies & Forms</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('policyFile', 'CF005-Complaints-_-Appeals') }}">Complaints and
                                Appeals</a></li>
                        <li><a href="{{ route('policyFile', 'Complaint-and-appeal-policy') }}">Complaints and
                                Appeals Policy and Procedure</a></li>
                        <li><a href="{{ route('policyFile', 'Fees-Charges-and-Refund-Policy') }}"> Fees, Charges
                                and Refund Policy and Procedure</a></li>
                        <li><a href="{{ route('policyFile', 'Student-Handbook-2019') }}">Students Handbook</a></li>
                        <!--<li><a href="{{ route('check-your-rpl-eligibility') }}">Check Your Eligibility</a></li>-->
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                <li><a href="https://elearning.nta.nsw.edu.au/login/index.php" target="blank">E-Learning</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
