<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class AdminAlertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.test-alert', [
            'alerts' => Alert::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'alert_entry' => 'required',
        ]);

        Alert::create($validated);

        //return redirect()->route('admin.categories.index')->with('success', 'Category has been created!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alert $alerts)
    {
        Alert::destroy($alerts->id);

        //return redirect()->route('admin.categories.index')->with('success', 'Category has been deleted!');
    }
}
