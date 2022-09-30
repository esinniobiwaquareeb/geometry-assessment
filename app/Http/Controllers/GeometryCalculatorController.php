<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GeometryService;
class GeometryCalculatorController extends Controller
{
    public function __construct()
    {
        $this->geometry_calculator = new GeometryService();
    }

    public function geometry_calculator(Request $request){
        // get objects
        $getObjects = $request->object;

        if(!$getObjects){
            return false;
        }

        // make a call to GeometryService
        $resultOfSumOfAreas = $this->geometry_calculator->sumOfAreas($getObjects);
        $resultOfSumOfCircumference = $this->geometry_calculator->sumOfCircumference($getObjects);

        $result = array('sum_of_areas' => $resultOfSumOfAreas, 'sum_of_circumference' => $resultOfSumOfCircumference);
        
        return $result;
    }

}
