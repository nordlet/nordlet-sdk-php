<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PartnerBalancesReportsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $partnerName
     */
    #[JsonProperty('partnerName')]
    public string $partnerName;

    /**
     * @var string $receivable
     */
    #[JsonProperty('receivable')]
    public string $receivable;

    /**
     * @var string $payable
     */
    #[JsonProperty('payable')]
    public string $payable;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @param array{
     *   partnerId: string,
     *   partnerName: string,
     *   receivable: string,
     *   payable: string,
     *   net: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->partnerName = $values['partnerName'];
        $this->receivable = $values['receivable'];
        $this->payable = $values['payable'];
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
