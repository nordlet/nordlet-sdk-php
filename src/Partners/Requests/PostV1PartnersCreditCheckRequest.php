<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersCreditCheckRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?string $additionalAmount
     */
    #[JsonProperty('additionalAmount')]
    public ?string $additionalAmount;

    /**
     * @param array{
     *   partnerId: string,
     *   additionalAmount?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->additionalAmount = $values['additionalAmount'] ?? null;
    }
}
