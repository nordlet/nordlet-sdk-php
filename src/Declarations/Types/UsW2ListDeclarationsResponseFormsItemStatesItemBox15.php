<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsW2ListDeclarationsResponseFormsItemStatesItemBox15 extends JsonSerializableType
{
    /**
     * @var string $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var ?string $employerStateId
     */
    #[JsonProperty('employerStateId')]
    public ?string $employerStateId;

    /**
     * @param array{
     *   state: string,
     *   employerStateId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->state = $values['state'];
        $this->employerStateId = $values['employerStateId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
