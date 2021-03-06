<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\{LoginRequest, PasswordRequest};

use App\User;

use Auth;

use Hash;


class AuthController extends Controller
{
    public function getRegister()
	{
		return view('auth.register');
	}
	
	public function postRegister(RegisterRequest $request)
	{
		$user = new User;
		
		$user->names = $request->names;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->is_admin = 0;
		
		$user->save();
		
		Auth::login($user);
		
		return redirect('compte');
	}
	
	public function getLogin()
	{
		return view('auth.login');
	}
	
	public function postLogin(LoginRequest $request)
	{
		if (Auth::attempt(['email' => $request->email, 'password'=>$request->password, 'is_admin' => 1], $request->remember))
		{	
			return redirect()->intended('admin');
		}
		
		elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
		{
			return redirect()->intended('compte');
		}
		else
		{
			return redirect('connexion')->withErrors('Identifian erronés')->withInput();
		}
	}
	
	public function account()
	{
		return view('auth.account');
	}
	
	public function postPassword(PasswordRequest $request) 
	{
		if (Hash::check($request->passwordOld, Auth::user()->password))
		{
			$id = Auth::user()->id;
			
			$user = User::find($id);
			
			$user->password = bcrypt($request->password);
			
			$user->save;
			
			return redirect('compte')->with('status', 'mot de passe modifié !');
			
		 }

			
			else 
			{
				return redirect('compte')->withErrors('mot de passe erroné !');
		    }
	}
	
	public function logout() 
	{
		Auth::logout();
		
		return redirect('connexion');
	}
}
