<?php

namespace ApiPlatform\Demo\Exception;

class ApiParchmentsPostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}