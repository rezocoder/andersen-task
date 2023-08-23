<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class FormController extends Controller
{
    public function index()
    {
        $formData = FormData::all();
        return view('form.index', compact('formData'));
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:form_data,email|max:255',
            'message' => 'required',
        ]);

        $formData = new FormData($validatedData);
        $formData->save();

        return redirect()->back()->with('success', 'Form data submitted successfully.');
    }
}
