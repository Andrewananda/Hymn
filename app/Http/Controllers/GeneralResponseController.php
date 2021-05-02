<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralResponseController extends Controller
{
    public static function getSuccessResponse($response, $message, $count) {
        return response()->json([
            'status_message'=>'Successfully fetched data',
            'data'=>$response,
            'errors'=>null,
            'message'=>$message,
            'count'=>$count
        ])->setStatusCode(200);
    }
    public static function getErrorResponse($error_message) {
        return response()->json([
            'status_message'=>'An error occurred',
            'data'=>null,
            'errors'=>true,
            'message'=>$error_message,
            'count'=>0
        ])->setStatusCode(200);
    }
}
