<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class PostV1AccountExportRequest extends JsonSerializableType
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
