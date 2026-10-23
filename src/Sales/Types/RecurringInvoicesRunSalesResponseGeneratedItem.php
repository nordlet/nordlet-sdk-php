<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class RecurringInvoicesRunSalesResponseGeneratedItem extends JsonSerializableType
{
    /**
     * @var string $recurringInvoiceId
     */
    #[JsonProperty('recurringInvoiceId')]
    public string $recurringInvoiceId;

    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public DateTime $issueDate;

    /**
     * @var bool $issued
     */
    #[JsonProperty('issued')]
    public bool $issued;

    /**
     * @var bool $sent
     */
    #[JsonProperty('sent')]
    public bool $sent;

    /**
     * @param array{
     *   recurringInvoiceId: string,
     *   invoiceId: string,
     *   issueDate: DateTime,
     *   issued: bool,
     *   sent: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->recurringInvoiceId = $values['recurringInvoiceId'];
        $this->invoiceId = $values['invoiceId'];
        $this->issueDate = $values['issueDate'];
        $this->issued = $values['issued'];
        $this->sent = $values['sent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
