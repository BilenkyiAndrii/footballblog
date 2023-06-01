<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Role;
use Illuminate\Http\Request;


class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', ['roles'=>$roles]);
    }

    public function create()
    {
        return view('roles.create');
    }


    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->input('name');
        $role->save();
        return redirect()->route('roles.index');
    }
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.show', compact('role'));
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->save();
        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('roles.index');
    }
}
