<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PayrollCalcResponse extends JsonSerializableType
{
    /**
     * @var string $npd
     */
    #[JsonProperty('npd')]
    public string $npd;

    /**
     * @var string $gpm
     */
    #[JsonProperty('gpm')]
    public string $gpm;

    /**
     * @var string $sodraEmployee
     */
    #[JsonProperty('sodraEmployee')]
    public string $sodraEmployee;

    /**
     * @var string $sodraEmployer
     */
    #[JsonProperty('sodraEmployer')]
    public string $sodraEmployer;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @param array{
     *   npd: string,
     *   gpm: string,
     *   sodraEmployee: string,
     *   sodraEmployer: string,
     *   net: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->npd = $values['npd'];
        $this->gpm = $values['gpm'];
        $this->sodraEmployee = $values['sodraEmployee'];
        $this->sodraEmployer = $values['sodraEmployer'];
        $this->net = $values['net'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
