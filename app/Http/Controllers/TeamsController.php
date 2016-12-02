<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;
use Auth;
use App\User;
use Carbon\Carbon;

class TeamsController extends Controller
{
    //

    public function index()
    {
    	$teams = Group::where('owner_id', Auth::id())->orderby('created_at', 'DESC')->paginate(25);
        $date = Carbon::now();
    	return view('admin.teams.index', compact('teams'));
    }
}