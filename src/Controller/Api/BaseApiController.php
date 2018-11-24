<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class BaseApiController
 *
 * @package App\Controller\Api
 */
class BaseApiController extends Controller
{
    /**
     * @var SerializerInterface $serializer
     */
    private $serializer;

    /**
     * BaseRestController constructor.
     *
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Returns response.
     *
     * @param $data
     * @param int $status
     * @return JsonResponse
     * @throws NotEncodableValueException
     */
    protected function returnResponse($data, $status = 200) : JsonResponse
    {
        return JsonResponse::fromJsonString($this->serializer->serialize($data, 'json'), $status);
    }
}