<?php

namespace App\Http\Controllers\Status;

use App\Http\Controllers\Controller;
use App\Services\Status\StatusServiceInterface;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    protected $statusService;

    public function __construct(StatusServiceInterface $statusService)
    {
        $this->statusService = $statusService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('status.index');
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
        $status = $request->all();
        return $this->statusService->createStatus($status);
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
        return $this->statusService->getStatusById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $status = $request->all();
        return $this->statusService->updateStatus($status, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->statusService->deleteStatus($id);
    }
}
