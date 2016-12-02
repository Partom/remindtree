<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Team;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use Carbon\Carbon;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::where('owner_id', Auth::id())->orderby('created_at', 'DESC')->paginate(5);
        $date = Carbon::now();
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->name == "")
        {
            Session::flash('flash_message', 'Name can not be empty.');
            return response()->json([
            'status' => 'failed',
            ]);
        }

        $request->merge([
        'owner_id' => Auth::user()->id,
        ]);

        $requestData = $request->all();
        
        $team = Team::create($requestData);
        Session::flash('flash_message', 'Team added!');
        
        return response()->json([
        
        'status' => 'success',
        'name' => $team->name,
        'id' => $team->id,
        'count' => $team->users->count(),
        
        ]) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::findOrFail($id);
        $users = $team->users;
        
        
        return view('admin.teams.show', compact('team', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        if(Auth::user()->id != $team->owner_id)
        {
            Session::flash('error', 'Unauthorized , you are not the owner of that group');
            return back();
        }
        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        
        $team = Team::findOrFail($id);
        if(Auth::user()->id != $team->owner_id)
        {
            Session::flash('error', 'Unauthorized , you are not the owner of that team');
            return back();
        }
        $team->update($requestData);
        Session::flash('flash_message', 'Team updated!');
        
        return redirect('teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        if(Auth::user()->id != $team->owner_id)
        {
            Session::flash('error', 'Unauthorized , you are not the owner of this team');
            return back();
        }
        $team->delete();
        
        Session::flash('flash_message', 'Team deleted!');
        
        return redirect('teams');
    }

    public function attachuser(Request $request)
    {
        if($request->ajax()){
            $guest = User::where('email', 'LIKE',trim($request->email))->first();

            $check =  Auth::user()->contacts()->where('id', $guest->id)->first();
            if(!$check)
            {
                Auth::user()->contacts()->attach($guest->id);
            }
            
            $team = Team::findOrFail($request->team_id);
            $team->users()->attach($guest->id);

            Session::flash('flash_message', 'User Added!');
            
            return response()->json([
            'status' => 'success',
            'data' => $guest,
            ]);
        }
        else
        {
            
            
            $phone_numbers = $request->phone_number;
            $eemails = $request->email;

            $phone_number = array_splice($phone_numbers, 1, 1);
            $eemail = array_splice($eemails, 1, 1);
            
            $phone = array_filter($phone_number);
            $email = array_filter($eemail);


            if (!empty($phone)) {

                $guests = User::whereIn('phone_number',$phone)->pluck('id')->toarray();
                   
            }
            elseif (!empty($email)){
                
                $guests = User::whereIn('email' ,$email)->pluck('id')->toarray();
         
            }

            

            

            if($request->team_id != '0')

            {
                $team = Team::findOrFail($request->team_id);
                $team->users()->attach($guests);
            }
         
             
            Auth::user()->addContact($guests);

            Session::flash('flash_message', 'User Added');
            
            
            return back();
            
        }
    }
}
