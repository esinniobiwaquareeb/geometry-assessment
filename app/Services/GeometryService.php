<?php
namespace App\Services;
use FastRoute\RouteParser\Std;
use stdClass;

use App\Models\Circle;
use App\Models\Triangle;

class GeometryService {

  public function sumOfAreas($objects)
  {
      $sum = 0.0;
      foreach ($objects as $object) {
          if ($object instanceof Circle) {
              $sum += $object->Surface();
          }
      }

      return $sum;
  }


  public function sumOfCircumference($objects)
  {
      $sum = 0.0;
      foreach ($objects as $object) {
          if ($object instanceof Circle) {
              $sum += $object->Circumference();
          }
      }

      return $sum;
  }

}

