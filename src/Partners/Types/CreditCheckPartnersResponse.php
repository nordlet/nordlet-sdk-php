<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CreditCheckPartnersResponse extends JsonSerializableType
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
     * @var ?string $creditLimit
     */
    #[JsonProperty('creditLimit')]
    public ?string $creditLimit;

    /**
     * @var string $openReceivables
     */
    #[JsonProperty('openReceivables')]
    public string $openReceivables;

    /**
     * @var string $additionalAmount
     */
    #[JsonProperty('additionalAmount')]
    public string $additionalAmount;

    /**
     * @var string $totalExposure
     */
    #[JsonProperty('totalExposure')]
    public string $totalExposure;

    /**
     * @var ?string $available
     */
    #[JsonProperty('available')]
    public ?string $available;

    /**
     * @var bool $exceeded
     */
    #[JsonProperty('exceeded')]
    public bool $exceeded;

    /**
     * @param array{
     *   partnerId: string,
     *   partnerName: string,
     *   openReceivables: string,
     *   additionalAmount: string,
     *   totalExposure: string,
     *   exceeded: bool,
     *   creditLimit?: ?string,
     *   available?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->partnerName = $values['partnerName'];
        $this->creditLimit = $values['creditLimit'] ?? null;
        $this->openReceivables = $values['openReceivables'];
        $this->additionalAmount = $values['additionalAmount'];
        $this->totalExposure = $values['totalExposure'];
        $this->available = $values['available'] ?? null;
        $this->exceeded = $values['exceeded'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
