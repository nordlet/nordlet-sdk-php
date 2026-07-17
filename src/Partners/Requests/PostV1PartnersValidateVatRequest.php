<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersValidateVatRequest extends JsonSerializableType
{
    /**
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @param array{
     *   vatCode?: ?string,
     *   partnerId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->vatCode = $values['vatCode'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
    }
}
