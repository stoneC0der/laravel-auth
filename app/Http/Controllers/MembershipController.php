<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function about()
    {
        return view('membership.about');
    }

    public function Fellows()
    {
        $team = User::paginate(21);
        $data = [
            'team'  => $team,
        ];
        return view('membership.members')->with($data);
    }

    public function faqs()
    {
        return view('membership.faqs');
    }

    public function regions()
    {
        return view('membership.regions');
    }

    public function mentors()
    {
        return view('membership.mentors');
    }

    public function course()
    {
        return view('membership.course-overview');
    }
}
