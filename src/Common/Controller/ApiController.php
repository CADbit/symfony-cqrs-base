<?php

namespace App\Common\Controller;

use App\Common\Service\JsonResponseHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    public function __construct(
        private readonly JsonResponseHelper $jsonResponse
    )
    {

    }
}