<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $team = [
            [
                'name' => 'Sarah Chen',
                'role' => 'Founder & Tea Master',
                'bio' => 'With over 10 years of experience in tea blending, Sarah founded Bubble Bliss with a passion for bringing authentic Taiwanese milk tea to the world.',
            ],
            [
                'name' => 'Michael Liu',
                'role' => 'Head Barista',
                'bio' => 'Michael is a certified tea sommelier who ensures every cup meets our high standards of quality and taste.',
            ],
            [
                'name' => 'Emma Wong',
                'role' => 'Creative Director',
                'bio' => 'Emma designs our seasonal menu and creates unique flavor combinations that keep our customers coming back for more.',
            ],
        ];

        return view('about', compact('team'));
    }
}

