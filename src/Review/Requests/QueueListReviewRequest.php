<?php

namespace Nordlet\Review\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class QueueListReviewRequest extends JsonSerializableType
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
