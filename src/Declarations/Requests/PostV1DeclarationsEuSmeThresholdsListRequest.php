<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class PostV1DeclarationsEuSmeThresholdsListRequest extends JsonSerializableType
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
