<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ConfigsListDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var ?string $country List the systems of this country instead of the company country
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @param array{
     *   country?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->country = $values['country'] ?? null;
    }
}
