<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triangle extends Model
{
    use HasFactory;
 
    public function Surface($a, $b, $c)
    {
        // make call to Circumference method
        $circumference = $this->Circumference($a, $b, $c);

        // calculate surface area 
        $surface = ($circumference/2);

        $output = array('type' => 'triangle', 'a' => (float)$a, 'b' => (float)$b, 'c' => (float)$c, 'surface' => (float)$surface, 'circumference' => (float)$circumference);

        // return the output back to the controller
        return $output;
    }

    public function Circumference($a, $b, $c)
    {
        $result = ($a + $b + $c);
        return $result;
    }

    protected $casts = array(
        "type" => "string",
        "a" => "float",
        "b" => "float",
        "c" => "float",
        'surface' => "float",
        "circumference" => "float"
    );

}
