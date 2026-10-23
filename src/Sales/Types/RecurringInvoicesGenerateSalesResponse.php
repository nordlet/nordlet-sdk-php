<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class RecurringInvoicesGenerateSalesResponse extends JsonSerializableType
{
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
     * @var ?string $error
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var RecurringInvoicesGenerateSalesResponseRecurringInvoice $recurringInvoice
     */
    #[JsonProperty('recurringInvoice')]
    public RecurringInvoicesGenerateSalesResponseRecurringInvoice $recurringInvoice;

    /**
     * @param array{
     *   invoiceId: string,
     *   issueDate: DateTime,
     *   issued: bool,
     *   sent: bool,
     *   recurringInvoice: RecurringInvoicesGenerateSalesResponseRecurringInvoice,
     *   error?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceId = $values['invoiceId'];
        $this->issueDate = $values['issueDate'];
        $this->issued = $values['issued'];
        $this->sent = $values['sent'];
        $this->error = $values['error'] ?? null;
        $this->recurringInvoice = $values['recurringInvoice'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
