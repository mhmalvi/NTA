<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * 
     */
    public function BeautyDiploma()
    {
        return view('pages.BeautyDiploma');
    }


    /**
     * 
     */
    public function remedial()
    {
        return view('pages.remedial');
    }

    public function BeautyTherapy_superseded(){
        return view('pages.old_BeautyTherapy');
    }


    /**
     * 
     */
    public function hairderssing()
    {
        return view('pages.hairdressing');
    }

    public function old_beautytherapy(){
        return view('pages.old_BeautyTherapy');
    }

    /**
     * 
     */
    public function BeautyTherapy()
    {
        return view('pages.BeautyTherapy');
    }


    public function hairdrerssing_four()
    {
        return view('pages.hairdressing_certificate_four');
    }

    public function diploma_beauty_therapy()
    {
        return view('pages.diploma_beauty_therapy');
    }

    public function child_youth_family()
    {
        return view('pages.certificate_child_youth_family_intervention');
    }

    public function mental_health()
    {
        return view('pages.certificate_four_in_mental_health');
    }

    public function leisure_health()
    {
        return view('pages.certificate_leisure_health');
    }

    public function youth_work()
    {
        return view('pages.diploma-youth-work');
    }

    public function diploma_of_counselling()
    {
        return view('pages.diplomaofCounselling');
    }

    public function diploma_of_mental_health()
    {
        return view('pages.diplomaofMentalHealth');
    }

    public function health_services_assistance()
    {
        return view('pages.healthServicesAssistance');
    }

    public function health_admin()
    {
        return view('pages.health-admin');
    }

    public function health_service(){
        return view('pages.allied-health-service');
    }
}
