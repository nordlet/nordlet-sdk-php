<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class RoEtransportSubmitDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $waybillId
     */
    #[JsonProperty('waybillId')]
    public string $waybillId;

    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var value-of<RoEtransportSubmitDeclarationsResponseState> $state
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
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   waybillId: string,
     *   reference: string,
     *   state: value-of<RoEtransportSubmitDeclarationsResponseState>,
     *   warnings: array<string>,
     *   uit?: ?string,
     *   detail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->waybillId = $values['waybillId'];
        $this->reference = $values['reference'];
        $this->state = $values['state'];
        $this->uit = $values['uit'] ?? null;
        $this->detail = $values['detail'] ?? null;
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
