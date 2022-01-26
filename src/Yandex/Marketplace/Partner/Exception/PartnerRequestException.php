<?php

namespace Yandex\Marketplace\Partner\Exception;

use Throwable;

class PartnerRequestException extends PartnerException
{
    /**
     * @var string
     */
    private $workload;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function setWorkload(string $workload)
    {
        $this->workload = $workload;
    }

    public function getWorkload(): string
    {
        return $this->workload;
    }
}
