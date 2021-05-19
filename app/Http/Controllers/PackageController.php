<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PackageController extends Controller
{
  public function index()
  {
    $packages = Package::all();
    return view('packages', compact('packages'));
  }
}
