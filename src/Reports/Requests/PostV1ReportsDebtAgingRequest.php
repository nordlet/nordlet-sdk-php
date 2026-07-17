<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Reports\Types\PostV1ReportsDebtAgingRequestSide;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsDebtAgingRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<PostV1ReportsDebtAgingRequestSide> $side
     */
    #[JsonProperty('side')]
    public ?string $side;

    /**
     * @var ?string $asOf
     */
    #[JsonProperty('asOf')]
    public ?string $asOf;

    /**
     * @param array{
     *   side?: ?value-of<PostV1ReportsDebtAgingRequestSide>,
     *   asOf?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->side = $values['side'] ?? null;
        $this->asOf = $values['asOf'] ?? null;
    }
}
