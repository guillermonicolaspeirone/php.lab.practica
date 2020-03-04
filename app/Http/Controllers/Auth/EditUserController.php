<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EditUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('pages.Settings');
    }

    public function updateuser(Request $request){

        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $validatedData = $this->validate(request(), [
            'name' => 'required|max:255',
        ]);

        // Fill user model
        $user->fill([
            'name' => $request->name,
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'Address' => $request->Address,
            'City' => $request->City,
            'Country' => $request->Country,
            'Postal_code' => $request->Postal_code
        ]);

        if ($validatedData == true) {
             // Save user to database
               $user->update();

        return redirect('/Settings'); 
        }else {
            return back()
            ->withErrors(['name' => trans('auth.failed')])
            ->withInput(request(['name']));
        }
       


        
    }

}