<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserStoreResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

use Laracast\Flash\Flash;

class UserController extends Controller
{
    public function index()
    {
        //$test = User::all()->where('status', 1);
        //$test = User::permission('listar')->get();
        //dd($test);
        //
        $items = User::all()->where('status', 1);
        //$permisos = User::permission()->all()->get();
        //dd($permisos);
        return view('pages.administracion.user.index', compact('items'));
    }

    public function create()
    {
        return view('pages.user.administracion.create');
    }

    public function store(UserStoreRequest $request)
    {
        //dd($request);
        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        User::create($input);
        flash("¡Se ha registrado ". $input['name'] . " de forma exitosa!")->success();
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        $item = User::findOrFail($id);
        $roles = $item->getRoleNames();
        //$rol = $item->roles();
        $permisos = $item->getAllPermissions();
        //dd($permiso);
        return view('pages.user.administracion.show', compact('item', 'roles', 'permisos'));
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);
        return view('pages.user.administracion.edit', compact('item'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $item = User::findOrFail($request->id);
        $input = $request->only('name', 'email');
        $password = $request->input('password');
        if($password){
            $input['password'] = bcrypt($password);
        }
        $item->fill($input);
        $item->save();
        flash("¡Se ha editado ". $item->name . " de forma exitosa!")->success();
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }

    public function status($id)
    {
        //dd($id);
        $item = User::findOrFail($id);
        $item->status = 0;
        $item->save();
        flash("¡Se ha cambiado el estado de ". $item->name, 'warning' )->important();
        return redirect()->route('user.index');
    }
}