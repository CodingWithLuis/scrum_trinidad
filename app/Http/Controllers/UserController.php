<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;

class UserController extends Controller
{
    public function getUsersData()
    {
        $users = User::query()
            ->with('role')
            ->select('id', 'name', 'firstName', 'lastName', 'email', 'phoneNumber')
            ->get();

        return response()->json(['data' => $users]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('user/Index', [
            'users' => User::all(),
            'roles' => Role::all(),  // Obtener los roles y pasarlos a la vista
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();

        // Devolver la vista de Inertia con los roles
        return Inertia::render('user/userCreate', [
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        User::create($request->validated());
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user->load('role');

        // Obtener roles u otras cosas que necesites
        $roles = Role::all();

        // Usar Inertia para enviar datos al componente React
        return Inertia::render('user/Edit', [
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route(route: 'users.index')->with(key: 'success', value: 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente');
    }
}
