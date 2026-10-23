<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class RecurringInvoicesRunSalesResponse extends JsonSerializableType
{
    /**
     * @var array<RecurringInvoicesRunSalesResponseGeneratedItem> $generated
     */
    #[JsonProperty('generated'), ArrayType([RecurringInvoicesRunSalesResponseGeneratedItem::class])]
    public array $generated;

    /**
     * @var array<RecurringInvoicesRunSalesResponseErrorsItem> $errors
     */
    #[JsonProperty('errors'), ArrayType([RecurringInvoicesRunSalesResponseErrorsItem::class])]
    public array $errors;

    /**
     * @param array{
     *   generated: array<RecurringInvoicesRunSalesResponseGeneratedItem>,
     *   errors: array<RecurringInvoicesRunSalesResponseErrorsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->generated = $values['generated'];
        $this->errors = $values['errors'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
