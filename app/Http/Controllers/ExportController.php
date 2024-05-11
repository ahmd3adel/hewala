<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExportRequest;
use App\Http\Requests\UpdateExportRequest;
use App\Models\Export;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exports = Export::paginate(5);
        return view('admin.exports.index' , ['exports' => $exports]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.exports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new export instance and fill it with validated data
        $export = Export::create($request->all());

        // Redirect to a relevant page, e.g., show the newly created export
        $exports = Export::all();
        return redirect()->route('exports.index' , ['exports' => $exports])->with('success', 'Export created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Export $export)
    {
        // Implement logic to show a specific export
        return view('admin.exports.show', compact('export'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Export $export)
    {
        // Return the edit form view with the export instance
        return view('admin.exports.edit', compact('export'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExportRequest $request, Export $export)
    {
        // Validate incoming request using UpdateExportRequest
        // If validation fails, it will automatically redirect back with errors

        // Fill the export instance with validated data
        $export->fill($request->validated());

        // Save the updated export to the database
        $export->save();

        // Redirect to a relevant page, e.g., show the updated export
        return redirect()->route('exports.show', $export->id)->with('success', 'Export updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Export $export)
    {
        // Delete the export from the database
        $export->delete();

        // Redirect to a relevant page, e.g., the index page
        return redirect()->route('exports.index')->with('success', 'Export deleted successfully');
    }
}
