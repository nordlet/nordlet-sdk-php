<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LtCitiesListReferenceRequest extends JsonSerializableType
{
    /**
     * @var ?string $municipalityCode
     */
    #[JsonProperty('municipalityCode')]
    public ?string $municipalityCode;

    /**
     * @var ?string $q
     */
    #[JsonProperty('q')]
    public ?string $q;

    /**
     * @param array{
     *   municipalityCode?: ?string,
     *   q?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->municipalityCode = $values['municipalityCode'] ?? null;
        $this->q = $values['q'] ?? null;
    }
}
