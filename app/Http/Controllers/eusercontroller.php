<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\euser;

class eusercontroller extends Controller
{
    public function index(): View{
        $eusers = euser::all();

        return view('euser.index', ['eusers' => $eusers]);
    }
}
