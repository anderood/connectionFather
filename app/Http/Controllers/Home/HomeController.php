<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\Home\HomeServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(HomeServiceInterface $homeService)
    {
        $this->homeService = $homeService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userData = $this->homeService->getAllJobs();
        return view('home', compact('userData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
