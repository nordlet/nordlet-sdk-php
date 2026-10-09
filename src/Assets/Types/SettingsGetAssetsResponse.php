<?php

namespace Nordlet\Assets\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SettingsGetAssetsResponse extends JsonSerializableType
{
    /**
     * @var bool $autoDepreciation
     */
    #[JsonProperty('autoDepreciation')]
    public bool $autoDepreciation;

    /**
     * @param array{
     *   autoDepreciation: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->autoDepreciation = $values['autoDepreciation'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
