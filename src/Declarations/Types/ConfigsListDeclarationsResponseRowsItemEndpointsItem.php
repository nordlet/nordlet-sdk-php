<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ConfigsListDeclarationsResponseRowsItemEndpointsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $test
     */
    #[JsonProperty('test')]
    public ?string $test;

    /**
     * @var ?string $production
     */
    #[JsonProperty('production')]
    public ?string $production;

    /**
     * @param array{
     *   name: string,
     *   test?: ?string,
     *   production?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->test = $values['test'] ?? null;
        $this->production = $values['production'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
