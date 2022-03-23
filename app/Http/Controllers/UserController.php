<?php

namespace App\Http\Controllers;
use App\Models\bryan;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $users = bryan::all();
        return view ('frontend/index')->with('users', $users);
    }
    public function create()
    {
        return view('frontend/create');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        bryan::create($input);
        return redirect('user')->with('flash_message', 'Users Addedd!');  
    }

    
    public function view($id)
    {
        $users = bryan::find($id);
        return view('frontend/view', ['users'=>$users]);
    }

    public function edit($id)
    {
        $users = bryan::find($id);
        return view('frontend/edit')->with('users', $users);
    }

  
    public function update(Request $request, $id)
    {
        $users = bryan::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('user')->with('flash_message', 'users Updated!');  
    }

   
    public function destroy($id)
    {
        bryan::destroy($id);
        return redirect('user')->with('flash_message', 'users deleted!');  
    }
}
