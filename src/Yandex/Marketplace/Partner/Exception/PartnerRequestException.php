<?php

namespace Yandex\Marketplace\Partner\Exception;

use Throwable;

class PartnerRequestException extends PartnerException
{
    /**
     * @var string
     */
    private $responseBody;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function setResponseBody(string $responseBody)
    {
        $this->responseBody = $responseBody;
    }

    public function getResponseBody(): string
    {
        return $this->responseBody;
    }
}
