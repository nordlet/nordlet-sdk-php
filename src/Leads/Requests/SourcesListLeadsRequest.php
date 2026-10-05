<?php

namespace Nordlet\Leads\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class SourcesListLeadsRequest extends JsonSerializableType
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
