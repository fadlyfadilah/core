<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRouteRequest;
use Illuminate\Http\Request;
use App\Models\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;
use Spatie\Permission\Models\Permission;
use App\Services\RouteService;


class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $routes = Route::get();
        $facadesRoutes = FacadesRoute::getRoutes();
        $permissions = Permission::orderBy('name')->get();

        return view('route.index', compact('routes', 'permissions', 'facadesRoutes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('route.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRouteRequest $request, RouteService $routeService)
    {
        return $routeService->create($request)
            ? back()->with('success', 'Route has been created successfully!')
            : back()->with('failed', 'Route was not created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('route.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('route.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRouteRequest $request, Route $route, RouteService $routeService)
    {
        return $routeService->update($request, $route)
            ? back()->with('success', 'Route has been updated successfully!')
            : back()->with('failed', 'Route was not updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Route $route)
    {
        return $route->delete()
            ? back()->with('success', 'Route has been deleted successfully!')
            : back()->with('failed', 'Route was not deleted successfully!');
    }
}
