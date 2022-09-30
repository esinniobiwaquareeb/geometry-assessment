<?php

namespace App\Helpers;

class  ResponseHelper {


  public function response_handler($response)
  {
      if ($response) { 
        $response = json_decode($response, true);
        return response()->json([ 'status_code'=>200 , 'data' => $response,], 200);
      }
      return [];
  }

  public function handleResponse($response, $type, $radius, $surface)
  {
      if ($response) {
          return response()->json([ 'type' => $type, 'radius'=>$radius, 'surface'=>$surface]);
      }
      return [];
  }

}