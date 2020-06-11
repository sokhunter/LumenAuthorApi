<?php
namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
        
    /**
     * successResponse
     *
     * @param  string|array $data
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data], $code);
    }
    
    /**
     * errorResponse
     *
     * @param  string $message
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code = Response::HTTP_ERROR)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}



?>