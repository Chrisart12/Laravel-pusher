<?php

namespace App\Http\Controllers;

use App\Notifications\Etape;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {

        // dd(\auth()->user());
        // Notification
        $user = auth()->user();
        $page = 'Companies';

        $user->notify(new Etape($user, $page));

        return view('company');
    }
}
