<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    //protected $redirectTo = '/admin/chefs/{$user_id}';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }


    protected function authenticated(Request $request, $user)
    {
        $user = auth()->user();
        if (!$user) {

            return redirect()->route('login')->with('not-auth', "Devi aver effettutato l'accesso per visualizzare questa pagina.");
        }
        $chef = $user->chef;
        if ($chef) {

            // Redirect to the route with the chef's ID
            return redirect()->route('admin.chefs.show', ['chef' => $chef->id]);
        } else {

            // Handle the case where no related chef is found
            return redirect('admin/dashboard');
        }
    }
}
