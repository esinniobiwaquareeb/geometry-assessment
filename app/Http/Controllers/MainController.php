<?php

namespace App\Http\Controllers;
use App\Models\Circle;
use App\Models\Triangle;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
        $this->circle = new Circle();
        $this->triangle = new Triangle();
    }

    public function circle($radius)
    {
        // validate the entered value 
        if (!is_numeric($radius)){
            return $this->json('Please enter numeric value');
        }

        // make a call to Circle model
        $result = $this->circle->Surface($radius);
        return response()->json($result);
    }

    public function triangle($a, $b, $c)
    {
        // validate the entered value 
        if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)){
            return $this->json('Please enter numeric values for all the fields');
        }

        // make a call to Triangle model
        $result = $this->triangle->Surface($a, $b, $c);
        return response()->json($result);
    }


}
