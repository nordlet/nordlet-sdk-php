<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class InvoicesCardPaymentsGetSalesRequest extends JsonSerializableType
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
