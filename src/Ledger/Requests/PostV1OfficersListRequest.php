<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class PostV1OfficersListRequest extends JsonSerializableType
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
