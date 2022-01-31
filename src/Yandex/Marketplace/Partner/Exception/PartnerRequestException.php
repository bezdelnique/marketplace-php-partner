<?php

namespace Yandex\Marketplace\Partner\Exception;

use Throwable;

class PartnerRequestException extends PartnerException
{
    /**
     * @var string
     */
    private $responseBody;

    /**
     * @var int
     */
    private $responseCode;

    /**
     * @var string
     */
    private $responseMessage;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function setResponseBody(string $responseBody)
    {
        $this->responseBody = $responseBody;
    }

    public function setResponseCode(int $responseCode)
    {
        $this->responseCode = $responseCode;
    }

    public function setResponseMessage(string $responseMessage)
    {
        $this->responseMessage = $responseMessage;
    }

    public function getResponseBody(): string
    {
        return $this->responseBody;
    }

    public function getResponseCode(): int
    {
        return $this->responseCode;
    }

    public function getResponseMessage(): string
    {
        return $this->responseMessage;
    }
}
