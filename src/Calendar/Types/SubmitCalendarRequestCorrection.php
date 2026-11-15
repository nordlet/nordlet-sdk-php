<?php

namespace Nordlet\Calendar\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SubmitCalendarRequestCorrection extends JsonSerializableType
{
    /**
     * @var ?string $reason
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @var ?string $reasonCode
     */
    #[JsonProperty('reasonCode')]
    public ?string $reasonCode;

    /**
     * @var ?string $authorityReference
     */
    #[JsonProperty('authorityReference')]
    public ?string $authorityReference;

    /**
     * @var ?string $discoveredOn
     */
    #[JsonProperty('discoveredOn')]
    public ?string $discoveredOn;

    /**
     * @param array{
     *   reason?: ?string,
     *   reasonCode?: ?string,
     *   authorityReference?: ?string,
     *   discoveredOn?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->reason = $values['reason'] ?? null;
        $this->reasonCode = $values['reasonCode'] ?? null;
        $this->authorityReference = $values['authorityReference'] ?? null;
        $this->discoveredOn = $values['discoveredOn'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
