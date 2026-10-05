<?php

namespace Nordlet\Consolidation\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class GroupsListConsolidationRequest extends JsonSerializableType
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
