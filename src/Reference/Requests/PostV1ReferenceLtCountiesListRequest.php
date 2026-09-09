<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class PostV1ReferenceLtCountiesListRequest extends JsonSerializableType
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
