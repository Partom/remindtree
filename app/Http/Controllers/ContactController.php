<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user     = Auth::user();
        $init     = array("None");
        $group    = Group::where('owner_id', $user->id)->pluck('name', 'id')->toarray();
        $contacts = Auth::user()->contacts;
        $groupi = Group::where('owner_id', $user->id)->pluck('name', 'id')->toarray();
        $contacts->load(['groups' => function ($query) use($user) {
            $query->where('owner_id', $user->id);
        }]);



        // dd($groupi);

        $groups = $init + $group;
        return view('admin.contacts.index')->with('groups', $group)
            ->with('contacts', $contacts)
             ->with('groupi', $groupi);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

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

    }

    public function update($id, Request $request)
    {

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
        Auth::user()->removeContact($id);

        return back();
    }

}
