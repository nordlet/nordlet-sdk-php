<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceLtMunicipalitiesListRequest extends JsonSerializableType
{
    /**
     * @var ?string $countyCode
     */
    #[JsonProperty('countyCode')]
    public ?string $countyCode;

    /**
     * @param array{
     *   countyCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->countyCode = $values['countyCode'] ?? null;
    }
}
