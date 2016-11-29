<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserformRequest;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Session;
use WorldCountries;

class UsersController extends Controller
{

    public function edit($id)
    {
        $countryModel = WorldCountries::getCountryModel();
        $countries    = $countryModel->pluck('name', 'id')->toarray();
        $user         = User::findorfail($id);

        return view('admin.pages.profil')->with('user', $user)
            ->with('countries', $countries);
    }

    public function update(UserformRequest $request, $id)
    {
        $user = User::findorfail($id);

        if ($request->hasFile('avatar')) {
            $filename = Auth::id() . '-' . time() . '.' . $request->avatar->extension();
            $request->avatar->storeAs('avatars/', $filename);

            $user->avatar = $filename;
            $user->update();
        }

        $input = $request->except(['avatar']);
        $user->update($input);
        Session::flash('flash_message', 'Changes Made with success');
        return back();
    }

    public function notverified(Request $request)
    {
        if ($request->user()->verified == 0) {
            return View('admin.verify');
        }

        return redirect('/dashboard');
    }
}
