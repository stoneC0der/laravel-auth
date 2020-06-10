<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreasOfInterestController extends Controller
{
    public function educationAndEntrepreneurship()
    {
        return view('areasofinterest.education-entrepreneurship');
    }

    public function humanRights()
    {
        return view('areasofinterest.human-rights');
    }

    public function consumerRights()
    {
        return view('areasofinterest.consumer-rights');
    }

    public function goodGovernanceAndLeadership()
    {
        return view('areasofinterest.good-governance-leadership');
    }

    public function fightAgainstCorruption()
    {
        return view('areasofinterest.fight-against-corruption');
    }

    public function environmentalProtection()
    {
        return view('areasofinterest.environmental-protection');
    }

    public function corporateAndSocialResponsibility()
    {
        return view('areasofinterest.corporate-social-responsibility');
    }
}
