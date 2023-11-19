<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\Department;
use App\Models\Marital;
use App\Models\Religion;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        $roles       = Role::all();

        return view('admin.user.create', compact('departments', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required|string|email|unique:users',
            'password'      => 'required|string',
            'department_id' => 'required',
            'designation'   => 'required',
            'role_id'       => 'required',
            'image'         => 'mimes:jpeg,jpg,png',
            'start_from'    => 'required|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'), $image);
        } else {
            $image = 'avatar.png';
        }
        $data['name']     = $request->first_name . ' ' . $request->last_name;
        $data['image']    = $image;
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return redirect()->back()->with('message', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        $district = DB::table('districts')->where('id', $user->district_id)->first();
        $dist = $district->name;
        return view('admin.user.show', compact('user', 'dist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $department = $user->department;  // get department of the user
        $role = $user->role;  // get role of the user
        $allDepartments = Department::all();  // get all departments
        $allBloods = Blood::all();  // get all departments
        $allMarital = Marital::all();  // get all departments
        $allReligion = Religion::all();  // get all departments
        $allDistrict = DB::table('districts')->get();  // get all departments
        $allCountry = DB::table('country')->get();  // get all departments
        $allRoles = Role::all();  // get all roles

        return view('admin.user.edit', compact('user', 'allBloods', 'allReligion', 'allDistrict', 'allCountry', 'allMarital', 'department', 'role', 'allDepartments', 'allRoles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'name'    => 'required',
            'email'         => 'required|string|email|unique:users,email,' . $id, // for that same user email address, for the same id
            'department_id' => 'required',
            'designation'   => 'required',
            'image'         => 'mimes:jpeg,jpg,png',
            'start_from'    => 'required|date',
        ]);

        $data = $request->all();

        $user = User::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'), $image);
        } else {
            $image = $user->image;
        }
        if ($request->hasFile('permanent_doc')) {
            $permanent_doc = $request->permanent_doc->hashName();
            $request->permanent_doc->move(public_path('document'), $permanent_doc);
        } else {
            $permanent_doc = $user->permanent_doc;
        }

        // if ($request->password) {
        //     $password = $request->password;
        // } else {
        //     $password = $user->password;
        // }

        $data['image']    = $image;
        $data['permanent_doc']    = $permanent_doc;
        // $data['password'] = bcrypt($password);

        $user->update($data);
        return redirect()->back()->with('message', 'User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('message', 'User Deleted Successfully.');
    }
}
