<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class PostV1HrEmployeesFieldsRequest extends JsonSerializableType
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
