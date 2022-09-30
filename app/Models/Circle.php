<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Circle extends Model
{
    use HasFactory;
    public function Surface(float $radius)
    {

        $radius = number_format($radius,2);
        $radius = bcdiv($radius,1,2);

        // make a call to circumference method
        $circumference = $this->Circumference($radius);

        // call Area in this class
        $surface_area = $this->Area($radius);

        // return the output back to the controller
        $output = array('type' => 'circle', 'radius' => (float)$radius, 'surface' => (float)$surface_area,'circumference' => (float)$circumference );
        return $output;
    }

    public function Diameter($radius)
    {
        // diameter is radius multiply by 2
        $result = 2 * $radius;
        return $result;
    }

    public function Area($radius)
    {
        // surface area = pi * r^2
        $surface_area = pi() *  pow($radius, 2);
        $surface_area = bcdiv($surface_area, 1,2);
        return $surface_area;
    }

    public function Circumference($radius)
    {
        // circumference  = 2 pi r 
        $circumference = 2 * pi() * $radius;
        $circumference = bcdiv($circumference, 1,2);
        return $circumference;
    }

    protected $casts = array(
        "type" => "string",
        "radius" => "float",
        'surface' => "float",
        "circumference" => "float"
    );
}
