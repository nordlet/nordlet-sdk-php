<?php

namespace Nordlet\Officers\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class ListOfficersRequest extends JsonSerializableType
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
