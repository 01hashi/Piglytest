<?php

namespace App\Http\Controllers;

use App\Http\Controllers\WeightController;
use App\Http\Requests\WeightRequest;
use App\Models\Weight;

class WeightController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function store(WeightRequest $request)
    {
        $validated = $request->validated();
        Weight::create($validated);
        return redirect()->route('some.route')->with('success', 'データが保存されました。');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}