<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Group;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use Carbon\Carbon;
class GroupsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\View\View
    */
    public function index()
    {
        $groups = Group::where('owner_id', Auth::id())->orderby('created_at', 'DESC')->paginate(25);
        $date = Carbon::now();

        return view('admin.groups.index', compact('groups'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\View\View
    */
    public function create()
    {

        return view('admin.groups.create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function store(Request $request)
    {
        
        
        if(!$request->name)
        {
            return response()->json([
            'status' => 'success',
            ]);
        }
        
        $request->merge([
        'owner_id' => Auth::user()->id,
        ]);
        
        $requestData = $request->all();
        
        $group = Group::create($requestData);
        
        Session::flash('flash_message', 'Group added!');
        
        return response()->json([
        
        'status' => 'success',
        'name' => $group->name,
        'id' => $group->id,
        'count' => $group->users->count(),
        
        ]) ;
    }
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    *
    * @return \Illuminate\View\View
    */
    public function show($id)
    {
        $group = Group::findOrFail($id);
        $users = $group->users;
        
        
        return view('admin.groups.show', compact('group', 'users'));
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    *
    * @return \Illuminate\View\View
    */
    public function edit($id)
    {
        
        
        $group = Group::findOrFail($id);
        if(Auth::user()->id != $group->owner_id)
        {
            Session::flash('error', 'Unauthorized , you are not the owner of that group');
            return back();
        }
        return view('admin.groups.edit', compact('group'));
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @param \Illuminate\Http\Request $request
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $group = Group::findOrFail($id);
        $group->update($requestData);
        if(Auth::user()->id != $group->owner_id)
        {
            Session::flash('error', 'Unauthorized , you are not the owner of that group');
            return back();
        }
        Session::flash('flash_message', 'Group updated!');
        
        return redirect('groups');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        if(Auth::user()->id != $group->owner_id)
        {
            Session::flash('error', 'Unauthorized , you are not the owner of that group');
            return back();
        }
        $group->delete();
        
        Session::flash('flash_message', 'Group deleted!');
        
        return redirect('groups');
    }
    
    
    public function showadduser($id)
    {
        $group = Group::findOrFail($id);
        
        return view('admin.groups.adduser', compact('group'));
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
            
            $group = Group::findOrFail($request->group_id);
            $group->users()->attach($guest->id);

            Session::flash('flash_message', 'Group deleted!');
            
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

            

            

            if($request->group_id != '0')

            {
                $group = Group::findOrFail($request->group_id);
                $group->users()->attach($guests);
            }
         
             
            Auth::user()->addContact($guests);

            Session::flash('flash_message', 'Group deleted!');
            
            
            return back();
            
        }
    }
    
    public function ingroups()
    {
        $groups = Auth::user()->groups()->paginate(5);
        
        return view('admin.groups.ingroups', compact('groups'));
    }
    
    public function removeuser(Request $request)
    {
        $user = User::where('email', 'LIKE',$request->email)->first();
        
        $group = Group::findOrFail($request->group_id);
        
        $group->users()->detach($request->user_id);
        
        return back();
    }
    
    
    
}