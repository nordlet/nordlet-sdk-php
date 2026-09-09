<?php

namespace Nordlet\Capture\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class PostV1CaptureSettingsRegenerateIntakeRequest extends JsonSerializableType
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
