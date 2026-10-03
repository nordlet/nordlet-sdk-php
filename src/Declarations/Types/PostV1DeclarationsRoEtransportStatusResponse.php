<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsRoEtransportStatusResponse extends JsonSerializableType
{
    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var value-of<PostV1DeclarationsRoEtransportStatusResponseState> $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var ?string $uit
     */
    #[JsonProperty('uit')]
    public ?string $uit;

    /**
     * @var ?string $detail
     */
    #[JsonProperty('detail')]
    public ?string $detail;

    /**
     * @param array{
     *   reference: string,
     *   state: value-of<PostV1DeclarationsRoEtransportStatusResponseState>,
     *   uit?: ?string,
     *   detail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->reference = $values['reference'];
        $this->state = $values['state'];
        $this->uit = $values['uit'] ?? null;
        $this->detail = $values['detail'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
