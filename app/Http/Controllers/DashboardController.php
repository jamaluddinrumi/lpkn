<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "dashboard",
        ];
        return Inertia::render("Dashboard", $data);
    }
}
