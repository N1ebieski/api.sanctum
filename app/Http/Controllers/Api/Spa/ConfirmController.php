<?php

namespace App\Http\Controllers\Api\Spa;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ConfirmController
{
    /**
     * Undocumented function
     *
     * @return JsonResponse
     */
    public function __invoke(Request $request) : JsonResponse
    {
        return Response::json([
            'message' => str_replace(
                ':user',
                $request->user()->name,
                'Jeśli ta wiadomość jest widoczna to znaczy, że Axios prawidłowo wstawił token CSRF w nagłówek X-XSRF-TOKEN, a Sanctum za pomocą cookie zautentykował usera: :user.'
            )
        ]);
    }
}
