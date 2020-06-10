<?php

namespace App\Http\Controllers;

use App\Models\User;

class InvestmentController extends Controller
{
    public function ourApproach()
    {
        return view('investments.our-approach');
    }

    public function companies()
    {
        $team = User::paginate(21);
        $data = [
            'team'  => $team,
        ];
        return view('investments.companies')->with($data);
    }

    public function regions()
    {
        return view('investments.regions');
    }

    public function sectors()
    {
        return view('investments.sectors');
    }

    public function investmentsPrinciples()
    {
        return view('investments.investments-principles');
    }
}
