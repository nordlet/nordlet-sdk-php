<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class PostV1BankMatchRulesListRequest extends JsonSerializableType
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
