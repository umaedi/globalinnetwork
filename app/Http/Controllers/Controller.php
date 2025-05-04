<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
abstract class Controller
{
    protected function notFound(string $message = 'Not Found!', int $code = Response::HTTP_NOT_FOUND)
    {
        return response()->json([
            'success'   => false,
            'message'   => $message,
        ], $code);
    }    
    protected function warning(string $message = 'Error!', int $code = Response::HTTP_INTERNAL_SERVER_ERROR)
    {
        return response()->json([
            'success'   => false,
            'message'   => $message,
        ], $code);
    }

    protected function error($message = 'Error!', int $code = Response::HTTP_INTERNAL_SERVER_ERROR)
    {
        return response()->json([
            'success'   => false,
            'message'   => "Terdapat validasi yang salah, Harap cek kembali!",
            'errors'   => $message
        ], $code);
    }

    protected function success($data = null, $message = 'Success!', int $code = Response::HTTP_OK)
    {
        $response = [
            'success'   => true,
            'message'   => $message
        ];

        if (!is_null($data)) {
            $response['metadata'] = $data;
        }

        return response()->json($response, $code);
    }
}
