<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class PostV1AccountSessionsListRequest extends JsonSerializableType
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
