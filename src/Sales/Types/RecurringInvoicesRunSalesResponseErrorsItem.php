<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class RecurringInvoicesRunSalesResponseErrorsItem extends JsonSerializableType
{
    /**
     * @var string $recurringInvoiceId
     */
    #[JsonProperty('recurringInvoiceId')]
    public string $recurringInvoiceId;

    /**
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @param array{
     *   recurringInvoiceId: string,
     *   message: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->recurringInvoiceId = $values['recurringInvoiceId'];
        $this->message = $values['message'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
