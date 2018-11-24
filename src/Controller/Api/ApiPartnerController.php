<?php

namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Class ApiPartnerController
 *
 * @package App\Controller\Api
 */
class ApiPartnerController extends BaseApiController
{
    /**
     * Get all discounts.
     *
     * @Route("/discounts/get/", name="get_discounts")
     * @Method("GET")
     */
    public function getDiscounts() : Response
    {
        $data = file_get_contents('../../../data/input1.json');

        return $this->returnResponse($data);
    }
}