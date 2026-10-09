<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SettingsUpdateAssetsRequest extends JsonSerializableType
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
}
