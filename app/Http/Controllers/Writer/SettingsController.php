<?php

namespace App\Http\Controllers\Writer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function writerSettings()
    {
        return Inertia('Writer/Settings');
    }
}
