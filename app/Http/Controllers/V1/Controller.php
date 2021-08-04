<?php

namespace App\Http\Controllers\V1;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Response padrão.
     *
     * @var array
     */
    protected $defaultResponse = [
        'message' => null,
        'data' => null,
        'errors' => null,
    ];

    /**
     * Muda os valores do response padrão.
     *
     * @param array $jsonData
     * @return array
     */
    private function makeResponse(array $jsonData)
    {
        $response = $this->defaultResponse;

        foreach ($jsonData as $key => $value) {
            $response[$key] = $value;
        }
        foreach ($response as $key => $value) {
            if (is_null($value)) {
                unset($response[$key]);
            }
        }

        return $response;
    }

    /**
     * Response de sucesso padrão [message, data].
     *
     * @param array $jsonData
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseSuccess(array $jsonData, int $code = Response::HTTP_OK)
    {
        $response = $this->makeResponse([
            'message' => $jsonData['message'],
            'data' => $jsonData['data'] ?? null,
        ]);

        return response()->json($response, $code);
    }

    /**
     * Response de coleta de dados padrão [data].
     *
     * @param mixed $jsonData
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseData($jsonData, int $code = Response::HTTP_OK)
    {
        $response = $this->makeResponse([
            'data' => $jsonData,
        ]);

        return response()->json($response, $code);
    }

    /**
     * Response de erro padrão [message, data?, errors].
     *
     * @param array $jsonData
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseError(array $jsonData, int $code = Response::HTTP_BAD_REQUEST)
    {
        $response = $this->makeResponse([
            'message' => $jsonData['message'],
            'data' => $jsonData['data'] ?? null,
            'errors' => $jsonData['errors'] ?? null,
        ]);

        return response()->json($response, $code);
    }

    /**
     * Response de erro padrão [message, data?, errors, exception?].
     *
     * @param array $jsonData
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseErrorServer(array $jsonData, int $code = Response::HTTP_INTERNAL_SERVER_ERROR)
    {
        $response = $this->makeResponse([
            'message' => $jsonData['message'] ?? null,
            'data' => $jsonData['data'] ?? null,
            'exception' => config('app.debug') ? [
                'message' => $jsonData['exception']->getMessage(),
                'code' => $jsonData['exception']->getCode(),
                'file' => $jsonData['exception']->getFile(),
                'line' => $jsonData['exception']->getLine(),
                'previous' => $jsonData['exception']->getPrevious(),
                'trace_as_string' => $jsonData['exception']->getTraceAsString(),
                'trace' => $jsonData['exception']->getTrace(),
            ] : null,
        ]);

        return response()->json($response, $code);
    }
}
