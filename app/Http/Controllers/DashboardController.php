<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['totalPendaftar'] = Santri::count();
        $data['jumlahUser'] = User::count();
        return view('dashboard.index', $data);
    }
}
