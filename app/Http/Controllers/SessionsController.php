<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Administrator;
class SessionsController extends Controller
{
    public function create2()
    {
        return view('sessions.create2');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Email ou Mot de passe incorrect, veuiller ressayer '
            ]);
        }
        
        return redirect()->to('/home');
    }
    
    public function destroy(Request $request): LogoutResponse
    {
        $this->guard->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return app(LogoutResponse::class);
    }
    public function admin()
    {
        return view('pages.admin');
    }

    /*public function connect(Request $request){
        $email= $request->input("email");
        $password= $request->input("password");
        $admin = ['email' => $email, 'password' => $password];
        $resultat = Administrator::where($admin)->get();
        if($resultat){
            return redirect()->to('/admin/dashbord');
        }
        return back()->with('danger' , 'Login ou mot de passe incorrect');
    }*/
    
}