<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;

class AboutController extends Controller
{
    public function aboutUs()
    {
        return view('about.about-us');
    }

    public function manifesto()
    {
        return view('about.manifesto');
    }

    public function team()
    {
        $team = User::paginate(22);
        $data = [
            'team'  => $team,
        ];
        return view('about.team')->with($data);
    }

    public function teamCategory($category)
    {
        // dd($category);
        $paginateSize = 0;
        if ($category === 'board') {
            $paginateSize = 10;
        }else{
            $paginateSize = 15;
        }
        $team = User::paginate($paginateSize);
        return view('about.team', compact('team'));
    }

    public function teamRole($category)
    {
        $paginateSize = 21;
        // if ()
    }

    public function partners()
    {
        return view('about.partners');
    }

    public function corporatePartners()
    {
        return view('about.corporate-partners');
    }

    public function reports()
    {
        return view('about.reports');
    }

    public function annualReport()
    {
        return view('about.annual-report');
    }
}
