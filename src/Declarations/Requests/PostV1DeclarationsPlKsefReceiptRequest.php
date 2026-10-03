<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlKsefReceiptRequest extends JsonSerializableType
{
    /**
     * @var ?string $sessionReferenceNumber
     */
    #[JsonProperty('sessionReferenceNumber')]
    public ?string $sessionReferenceNumber;

    /**
     * @param array{
     *   sessionReferenceNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->sessionReferenceNumber = $values['sessionReferenceNumber'] ?? null;
    }
}
