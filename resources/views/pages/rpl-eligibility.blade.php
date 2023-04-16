@extends('layouts.app')

@section('title', 'Check you eligibility for RPL')

@section('content')
<div class="container">
    <div class="row" id="alert" style="display: none; margin-top: 30px; margin-bottom: 3px;">
        <div class="col-md-12">
            <div class="alert alert-success" id="alert-success"></div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px; margin-bottom: 3px;">
        <div class="col-md-12">
            @include('components.rpl_form_ad_banner')
        </div>
    </div>
    <div class="form-wrapper">
        <form action="" id="rplForm" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h3>
                                <strong>1</strong>
                                Qualification
                            </h3>
                            <br />
                            <p>Choose the qualification you are looking for.</p>
                        </div>
                        <div class="box-content">
                            <div class="form-group">
                                <div class="radio">
                                    <label for="qualification">What qualification are you looking for? *</label>

                                    <div id="qualification"></div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="first_course" value="SHB40115 - CERTIFICATE IV in Beauty Therapy" />

                                            <label for="first_course" class="exp-lbl exp-lbl2">
                                                <div>
                                                    SHB40115 - CERTIFICATE IV in Beauty Therapy
                                                </div>
                                            </label>
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="second_course" value="SHB30416 - CERTIFICATE III in Hairdressing" />

                                            <label for="second_course" class="exp-lbl exp-lbl2">
                                                <div>
                                                    SHB30416 - CERTIFICATE III in Hairdressing
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="third_course" value="SHB50115 - DIPLOMA of Beauty Therapy" />

                                            <label for="third_course" class="exp-lbl exp-lbl2">
                                                <div>
                                                    SHB50115 - DIPLOMA of Beauty Therapy
                                                </div>
                                            </label>
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="fourth_course" value="SHB40216 CERTIFICATE IV in Hairdressing" />

                                            <label for="fourth_course" class="exp-lbl exp-lbl2">
                                                <div>
                                                    SHB40216 CERTIFICATE IV in Hairdressing
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="fifth_course" value="CHC40321 - Certificate IV in Child, Youth and Family Intervention" />

                                            <label for="fifth_course" class="exp-lbl exp-lbl2">

                                                <div>
                                                    CHC40321 - Certificate IV in Child, Youth and Family Intervention

                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="sixth_course" value="CHC40321 - Certificate IV in Mental Health" />

                                            <label for="sixth_course" class="exp-lbl exp-lbl2">

                                                <div>

                                                    CHC40321 - Certificate IV in Mental Health



                                                </div>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="seventh_course" value="CHC43415 - Certificate IV in Leisure and Health" />

                                            <label for="seventh_course" class="exp-lbl exp-lbl2">

                                                <div>
                                                    CHC43415 - Certificate IV in Leisure and Health
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="eighth_course" value="CHC50421 - Diploma of Youth Work" />

                                            <label for="eighth_course" class="exp-lbl exp-lbl2">

                                                <div>
                                                    CHC50421 - Diploma of Youth Work

                                                </div>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="ninth_course" value="CHC50421 - Diploma of Counselling" />

                                            <label for="ninth_course" class="exp-lbl exp-lbl2">

                                                <div>
                                                    CHC50421 - Diploma of Counselling

                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="tenth_course" value="CHC53315 - Diploma of Mental Health" />

                                            <label for="tenth_course" class="exp-lbl exp-lbl2">

                                                <div>
                                                    CHC53315 - Diploma of Mental Health

                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="eleventh_course" value="HLT33115 - Certificate III in Health Services Assistance" />


                                            <label for="eleventh_course" class="exp-lbl exp-lbl2">

                                                <div>
                                                    HLT33115 - Certificate III in Health Services Assistance

                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="twelveth_course" value="HLT43021 - Certificate IV in Allied Health Assistance" />


                                            <label for="twelveth_course" class="exp-lbl exp-lbl2">

                                                <div>
                                                    HLT43021 - Certificate IV in Allied Health Assistance


                                                </div>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="radio" name="qualification" id="thirteenth_course" value="HLT37315 - Certificate III in Health Administration" />



                                            <label for="thirteenth_course" class="exp-lbl exp-lbl2">


                                                <div>
                                                    HLT37315 - Certificate III in Health Administration
                                                </div>
                                            </label>
                                        </div>

                                    </div>



                                    <div class="text-danger" v-if="errors.messages.qualification.length > 0">
                                        {{-- {{ errors.messages.qualification[0] }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3>
                                <strong>2</strong>
                                Professional Experience
                            </h3>
                            <br />
                            <p>Describe your profession experience.</p>
                        </div>
                        <div class="box-content">
                            <div class="form-card form-group">
                                <div class="radio p-0">
                                    <label for="" class="p-0">How many years of relevant work experience do
                                        you have?
                                        *</label>
                                    <div id="experience"></div>
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-6">
                                            <input type="radio" name="experience" id="one" value="1 - 2 years" />
                                            <label for="one" class="exp-lbl exp-lbl2">
                                                <div>
                                                    1 - 2 <br />
                                                    Years
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <input type="radio" name="experience" id="two" value="3 - 4 years" />
                                            <label for="two" class="exp-lbl exp-lbl2">
                                                <div>
                                                    3 - 4 <br />
                                                    Years
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <input type="radio" name="experience" id="three" value="5 - 9 years" />
                                            <label for="three" class="exp-lbl exp-lbl2">
                                                <div>
                                                    5 - 9 <br />
                                                    Years
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <input type="radio" name="experience" id="four" value="10 + years" />
                                            <label for="four" class="exp-lbl exp-lbl2">
                                                <div>
                                                    10 + <br />
                                                    Years
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-danger" v-if="errors.messages.experience.length > 0">
                                        {{-- {{ errors.messages.experience[0] }} --}}
                                    </div>
                                </div>
                                <div class="radio p-0">
                                    <label class="p-0">Where is your work experience? *</label>
                                    <div id="work_location"></div>
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="radio" name="work_location" id="wlOne" value="australia" name="work_location" />
                                            <label for="wlOne" class="exp-lbl exp-lbl2">
                                                <div>Australia</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="radio" name="work_location" id="wlTwo" value="overseas" name="work_location" />
                                            <label for="wlTwo" class="exp-lbl exp-lbl2">
                                                <div>Overseas</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="radio" name="work_location" id="wlThree" value="other" name="work_location" />
                                            <label for="wlThree" class="exp-lbl exp-lbl2">
                                                <div>Other</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-danger" v-if="errors.messages.work_location.length > 0">
                                        {{-- {{ errors.messages.work_location[0] }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3>
                                <strong>3</strong>
                                Your Address
                            </h3>
                            <br />
                            <p>Please select where do you live in.</p>
                        </div>
                        <div class="box-content">
                            <div class="form-card form-group">
                                <div class="radio p-0">
                                    <label class="p-0">What state do you live in? *</label>
                                    <div id="location"></div>
                                    <div class="row">
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locOne" value="NSW" name="location" />
                                            <label for="locOne" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/01.webp') }}" alt="nsw" />
                                                <div>NSW</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locTwo" value="VIC" name="location" />
                                            <label for="locTwo" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/02.webp') }}" alt="vic" />
                                                <div>VIC</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locThree" value="QLD" name="location" />
                                            <label for="locThree" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/03.webp') }}" alt="qld" />
                                                <div>QLDs</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locFour" value="SA" name="location" />
                                            <label for="locFour" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/04.webp') }}" alt="sa" />
                                                <div>SA</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row pt-sm-5">
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locFive" value="WA" name="location" />
                                            <label for="locFive" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/05.webp') }}" alt="wa" />
                                                <div>WA</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locSix" value="ACT" name="location" />
                                            <label for="locSix" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/06.webp') }}" alt="act" />
                                                <div>ACT</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locSeven" value="NT" name="location" />
                                            <label for="locSeven" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/07.webp') }}" alt="nt" />
                                                <div>NT</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locEight" value="TAS" name="location" />
                                            <label for="locEight" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/08.webp') }}" alt="tas" />
                                                <div>TAS</div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="text-danger" v-if="errors.messages.location.length > 0">
                                        {{-- {{ errors.messages.location[0] }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3>
                                <strong>4</strong>
                                Personal Information
                            </h3>
                            <br />
                            <p>Please enter your personal information</p>
                        </div>
                        <div class="box-content">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" class="form-control" placeholder="Please enter your full name" name="name" />
                                <div class="text-danger" v-if="errors.messages.name.length > 0">
                                    {{-- {{ errors.messages.name[0] }} --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" class="form-control" placeholder="example@email.com" name="email" />
                                <div class="text-danger" v-if="errors.messages.email.length > 0">
                                    {{-- {{ errors.messages.email[0] }} --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">Contact Number *</label>
                                <input type="text" id="phone" class="form-control" placeholder="Enter your contact number" name="contact" />
                                <div class="text-danger" v-if="errors.messages.contact.length > 0">
                                    {{-- {{ errors.messages.contact[0] }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 24px;">
                    <div class="card card-custom">
                        <h5 class="card-title card-title-custom">Looking for answer you can't find?</h5>
                        <div class="card-body">
                            <img src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/000000/external-headphone-devices-icongeek26-linear-colour-icongeek26-1.png" />
                            <p class="card-text">Our expert are always here to help!</p>
                            <a href="tel:1300616123" class="card-text card-text-number">1300 616 123</a>
                            <a href="/contact-us" target="_blank" class="btn btn-primary btn-primary-custom">Get in touch now!</a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-header">
                            <h3>
                                <strong>5</strong>
                                RPL Checklist
                            </h3>
                            <br />
                            <p>Tick, if you can demonstrate evidence</p>
                        </div>

                        <div class="box-content">
                            <div class="radio">
                                <label class="p-0">
                                    Do you hold any academic qualifications relating to the course being enquired?
                                </label>
                                <div id="q1"></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="radio" name="q1" id="q1_1" value="Yes" />
                                        <label for="q1_1" class="exp-lbl exp-lbl2">
                                            <div>Yes</div>
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="radio" name="q1" id="q1_2" value="No" />
                                        <label for="q1_2" class="exp-lbl exp-lbl2">
                                            <div>No</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-danger" v-if="errors.messages.q1.length > 0">
                                    {{-- {{ errors.messages.q1[0] }} --}}
                                </div>
                            </div>

                            <div class="radio">
                                <label class="p-0">
                                    Are you able to provide evidence of industry work experience? Eg: Reference letters,
                                    pay slips, pictures, videos and more
                                </label>
                                <div id="q2"></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="radio" name="q2" id="q2_1" value="Yes" />
                                        <label for="q2_1" class="exp-lbl exp-lbl2">
                                            <div>Yes</div>
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="radio" name="q2" id="q2_2" value="No" />
                                        <label for="q2_2" class="exp-lbl exp-lbl2">
                                            <div>No</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-danger" v-if="errors.messages.q1.length > 0">
                                    {{-- {{ errors.messages.q1[0] }} --}}
                                </div>
                            </div>

                            <div class="radio">
                                <label class="p-0">
                                    Are you ready to become industry qualified immediately?
                                </label>
                                <div id="q3"></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="radio" name="q3" id="q3_1" value="Yes" />
                                        <label for="q3_1" class="exp-lbl exp-lbl2">
                                            <div>Yes</div>
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="radio" name="q3" id="q3_2" value="No" />
                                        <label for="q3_2" class="exp-lbl exp-lbl2">
                                            <div>No</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-danger" v-if="errors.messages.q1.length > 0">
                                    {{-- {{ errors.messages.q1[0] }} --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-header">
                            <h3>
                                <strong>6</strong>
                                Miscellaneous
                            </h3>
                            <br />
                            <p>Tell us more about you.</p>
                        </div>
                        <div class="box-content">
                            <div class="form-group">
                                <label for="remark">Remarks:</label>
                                <textarea id="remark" class="form-control" rows="5" placeholder="Do you have any query?" name="remark"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="button-rpl" id="is_submit_button">Submit</button>
                    <button type="button" class="button-rpl" id="is_spinner" style="display: none;background: #46d6fb;"><i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i><span style="font-size:
                                                                                                                                                                                    18px;">Submitting..</span></button>
                    {{-- <button type="button" class="button-rpl" onclick="createRPL()">Submit</button> --}}

                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script>
    /*function save() {
        
        // alert(company_id)
        // $.ajax({
        // type:"GET",
        // url:"http://localhost:8002/api/send-company-id",
        // success:function(res){
        // console.log(res)
        // }
        // })

    }*/

    $("#rplForm").on('submit', function(e) {
        e.preventDefault();

        var company_id;

        if (document.getElementById('first_course').checked == true) {


        var course = document.getElementById('first_course').value

    //alert(course)



        } else if (document.getElementById('second_course').checked == true) {



        var course = document.getElementById('second_course').value






        } else if (document.getElementById('third_course').checked == true) {




        var course = document.getElementById('third_course').value






        } else if (document.getElementById('fourth_course').checked == true) {





        var course = document.getElementById('fourth_course').value







        } else if (document.getElementById('fifth_course').checked == true) {






        var course = document.getElementById('fifth_course').value







        } else if (document.getElementById('sixth_course').checked == true) {







        var course = document.getElementById('sixth_course').value









        } else if (document.getElementById('seventh_course').checked == true) {

        var course = document.getElementById('seventh_course').value






        } else if (document.getElementById('eighth_course').checked == true) {


        var course = document.getElementById('eighth_course').value







        } else if (document.getElementById('ninth_course').checked == true) {



        var course = document.getElementById('ninth_course').value








        } else if (document.getElementById('tenth_course').checked == true) {




        var course = document.getElementById('tenth_course').value









        } else if (document.getElementById('eleventh_course').checked == true) {





        var course = document.getElementById('eleventh_course').value










        } else if (document.getElementById('twelveth_course').checked == true) {






        var course = document.getElementById('twelveth_course').value











        } else if (document.getElementById('thirteenth_course').checked == true) {







        var course = document.getElementById('thirteenth_course').value











        }



        if (document.getElementById('one').checked == true) {



        var experience = document.getElementById('one').value







        } else if (document.getElementById('two').checked == true) {




        var experience = document.getElementById('two').value








        } else if (document.getElementById('three').checked == true) {





        var experience = document.getElementById('three').value








        } else if (document.getElementById('four').checked == true) {






        var experience = document.getElementById('four').value








        }


        if (document.getElementById('wlOne').checked == true) {




        var work_experience = document.getElementById('wlOne').value








        } else if (document.getElementById('wlTwo').checked == true) {





        var work_experience = document.getElementById('wlTwo').value










        } else if (document.getElementById('wlThree').checked == true) {






        var work_experience = document.getElementById('wlThree').value










        }


        var name = document.getElementById('name').value


        var email = document.getElementById('email').value




        var phone = document.getElementById('phone').value

        // alert(name)




        if (document.getElementById('locOne').checked == true) {

        var location = document.getElementById('locOne').value



        } else if (document.getElementById('locTwo').checked == true) {


        var location = document.getElementById('locTwo').value




        } else if (document.getElementById('locThree').checked == true) {



        var location = document.getElementById('locThree').value




        } else if (document.getElementById('locFour').checked == true) {




        var location = document.getElementById('locFour').value





        } else if (document.getElementById('locFive').checked == true) {





        var location = document.getElementById('locFive').value





        } else if (document.getElementById('locSix').checked == true) {






        var location = document.getElementById('locSix').value







        } else if (document.getElementById('locSeven').checked == true) {
        var location = document.getElementById('locSeven').value




        } else if (document.getElementById('locEight').checked == true) {

        var location = document.getElementById('locEight').value






        }

        if (document.getElementById('q3_1').checked == true) {



        var q3 = document.getElementById('q3_1').value



        } else if (document.getElementById('q3_2').checked == true) {




        var q3 = document.getElementById('q3_2').value




        }


        if (document.getElementById('q2_1').checked == true) {




        var q2 = document.getElementById('q2_1').value




        } else if (document.getElementById('q2_2').checked == true) {




        var q2 = document.getElementById('q2_2').value




        }


        if (document.getElementById('q1_1').checked == true) {





        var q1 = document.getElementById('q1_1').value





        } else if (document.getElementById('q1_2').checked == true) {




        var q1 = document.getElementById('q1_2').value




        }


        //alert(q2)


        //var remark = document.getElementById('remark').value
        //var course = $('#course').val()
        // alert(course)
        var relevent_experience = experience
        var working_place = location
        //var living_place = $('#living_place').val()
        var academic_qualification = q1

        var work_evidence = q2

        var industry_qualified = q3

        var full_name = name
        var contact = phone
        var query = remark
        var lead_from = "website"
        var abn = 6666
        var formData = []

        formData.push({
        "name": "how_many_years_of_relevant_work_experience_do_you_have?"
        , "values": [relevent_experience]
        , }, {
        "name": "what_state_do_you_live_in?"
        , "values": [working_place]

        }, {
        "name": "please_provide_your_present\/current_contact_number._"
        , "values": [contact]
        }, {
        "name": "Do you hold any academic qualifications relating to the course being enquired?"
        , "values": [academic_qualification]
        }, {
        "name": "Are you able to provide evidence of industry work experience? Eg. Reference letters, pay slips, pictures, videos and more"
        , "values": [work_evidence]
        }, {
        "name": "email"
        , "values": [email]
        }, {
        "name": "are_you_ready_to_become_industry_qualified_immediately?"
        , "values": [industry_qualified]
        }, {
        "name": "full_name"
        , "values": [full_name]
        }, {
        "name": "phone_number"
        , "values": [contact]
        });
        var data = "abn=" + abn

        $.ajax({
        type: "POST"
        , url: "https://crmcompany.quadque.digital/api/send-company-abn"
        , data: data
        , success: function(data) {
        //alert(JSON.stringify(data))
        //console.log(data)
        // company_id = data.id
        // console.log(company_id)
        }
        }).then((res) => {
        company_id = res.id
        var form_data = JSON.stringify(formData)
        var datastr = "course=" + course + "&relevent_experience=" + relevent_experience + "&lead_from=" + lead_from + "&work_location=" + working_place + "&client_id=" + company_id + "&academic_qualification=" + academic_qualification + "&full_name=" + full_name + "&student_email=" + email + "&phone_number=" + contact + "&query=" + query + "&form_data=" + form_data;

        // alert(datastr)
        $.ajax({
        type: "POST"
        , url: "https://crmleads.quadque.digital/api/create-lead-from-form"
        , data: datastr
        , success: function(res) {
        // alert(res)
        }
        })
        })

        ////////////////////////////////////////////////////////
        $('#is_submit_button').hide()
        $('#is_spinner').show()

        var rplForm = document.getElementById("rplForm");
        //alert(JSON.stringify(rplForm))

        //console.log(JSON.stringify(rplForm))

        var fd = new FormData(rplForm);

        // Object.keys(form).forEach((key) => {
        //     fd.append(key, form[key]);
        // });

        var files = $("#files").prop("files");
        if (files.length > 0) {
            $.each(files, function(key, value) {
                fd.append("files[]", value);
            });
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var base_url = window.location.origin;
        $.ajax({
            url: base_url + '/check-eligibility'
            , data: fd
            , cache: false
            , processData: false
            , contentType: false
            , type: 'POST'
            , success: function(dataofconfirm) {
                console.log('dataofconfirm.status', dataofconfirm.success);
                if (dataofconfirm.success == 'success') {

                    window.location.href = base_url + '/rpl/success';

                    $('#alert').show();
                    $('#alert-success').text(
                        'Thank you one of our consultants will be in touch with you soon.');

                    $('#is_submit_button').show()
                    $('#is_spinner').hide()

                    // document.getElementById('rplForm').reset()
                    $('#rplForm').trigger("reset");

                }
            }
            , error: function(error) {
                console.log(error.responseJSON.errors);
                if (error.status == 422) {
                    // this.error = error.response.data.errors
                    $('#is_spinner').hide()
                    $('#is_submit_button').show();
                    $('#is_submit_button').css({
                        'border': '1px solid red'
                    });

                    $.each(error.responseJSON.errors, function(item, index) {
                        let input = jQuery(document).find('input[name="' + item + '"]')
                        let inputAfter = jQuery(document).find('input[name="' + item +
                            '"] + span')


                        if (item == 'experience' | item == 'work_location' | item ==
                            'location' | item == 'qualification' | item == 'q1' | item ==
                            'q3' | item == 'q5' | item == 'q6' | item == 'q8') {

                            if (item == 'qualification') {

                                $('#qualification').after('<span class="text-danger">' +
                                    error.responseJSON.errors[item] + '</span>')

                            }

                            if (item == 'experience') {

                                $('#experience').after('<span class="text-danger">' + error
                                    .responseJSON.errors[item] + '</span>')

                            }

                            if (item == 'location') {

                                $('#location').after('<span class="text-danger">' + error
                                    .responseJSON.errors[item] + '</span>')

                            }

                            if (item == 'work_location') {

                                $('#work_location').after('<span class="text-danger">' +
                                    error.responseJSON.errors[item] + '</span>')

                            }

                            if (item == 'q1') {

                                $('#q1').after('<span class="text-danger">' + error
                                    .responseJSON.errors[item] + '</span>')

                            }

                            if (item == 'q3') {

                                $('#q3').after('<span class="text-danger">' + error
                                    .responseJSON.errors[item] + '</span>')

                            }

                            if (item == 'q5') {

                                $('#q5').after('<span class="text-danger">' + error
                                    .responseJSON.errors[item] + '</span>')

                            }

                            if (item == 'q6') {

                                $('#q6').after('<span class="text-danger">' + error
                                    .responseJSON.errors[item] + '</span>')

                            }

                            if (item == 'q8') {

                                $('#q8').after('<span class="text-danger">' + error
                                    .responseJSON.errors[item] + '</span>')

                            }


                        } else {

                            input.addClass('is-invalid')

                            inputAfter.remove()
                            input.after('<span class="text-danger">' + error.responseJSON
                                .errors[item] + '</span>')

                            // Array element
                            let inputArr = jQuery(document).find('input[name="' + item +
                                '[]"]')
                            let inputAfterArr = jQuery(document).find('input[name="' +
                                item + '[]"] + span')

                            inputArr.addClass('is-invalid')

                            inputAfterArr.remove()
                            inputArr.after('<span class="text-danger">' + error.responseJSON
                                .errors[item] + '</span>')

                        }

                    })
                }
            }
        , });
    });

</script>
@endpush

@push('css')
<style>
    .card-custom {
        margin-top: 24px;
        margin-bottom: 20px;
        border: 1px solid #E0E0E0;
        text-align: center;
    }

    .card-title-custom {
        margin-bottom: 0.75rem;
        background: #46D6FB;
        padding: 10px 0px;
        color: #fff;
        font-weight: 900;
    }

    .card-text-number {
        color: #46D6FB;
        font-weight: 900;
    }

    .btn-primary-custom {
        width: 100%;
        background: #46D6FB;
        color: #fff !important;
        font-weight: 700;
        border: none;
    }

</style>
@endpush
