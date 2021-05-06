<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserValidation;
use Illuminate\Support\Facades\Gate;
use App\Actions\Fortify\CreateNewUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();1
        $doctors = Role::find(2)->users()->paginate(2);
     
            return view('admin.doctors.index' ,['doctors'=> $doctors]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctors.create', ['roles' => Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserValidation $request)
    {
    //   $valid_data = $request->validated;
    //   $user = User::create($request->except(['_token' , 'roles'])); 
      $newuser = new CreateNewUser();
      $user = $newuser->create($request->only(['name','email','password','password_confirmation']));

      $user->roles()->sync($request->roles);
      $request->session()->flash('success' , 'User Added Sucessfully');
      return redirect(route('admin.doctors.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserValidation $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id ,Request $request)
    {
        User::destroy($id);
        $request->session()->flash('success' , 'User Deleted Sucessfully');
        return redirect(route('admin.doctors.index'));

    }
}
