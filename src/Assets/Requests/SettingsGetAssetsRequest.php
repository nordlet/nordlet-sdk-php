<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class SettingsGetAssetsRequest extends JsonSerializableType
{
    /**
     * @param array{
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        unset($values);
    }
}
