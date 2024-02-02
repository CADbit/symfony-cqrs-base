<?php

namespace App\Common\Service;

use Symfony\Component\HttpFoundation\JsonResponse;

class JsonResponseHelper
{
    public function successResponse(string $status, string $message, array $data = []): JsonResponse
    {
        $responseData = [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];

        return new JsonResponse($responseData);
    }

    public function errorResponse(string $status, string $message): JsonResponse
    {
        $responseData = [
            'status' => $status,
            'message' => $message,
        ];

        return new JsonResponse($responseData, JsonResponse::HTTP_BAD_REQUEST);
    }
}