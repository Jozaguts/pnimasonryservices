<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function show(string $service)
    {
        $data = trans("services.$service");

        if (!is_array($data)) {
            abort(404);
        }
        return view('services.show',$data);
    }
}
