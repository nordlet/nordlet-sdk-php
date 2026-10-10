<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class InvoicesApplyAdvanceSalesRequest extends JsonSerializableType
{
    /**
     * @var string $advanceId
     */
    #[JsonProperty('advanceId')]
    public string $advanceId;

    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @var ?string $amount Gross amount of the advance to apply; defaults to the unapplied advance or the unpaid balance of the invoice, whichever is smaller
     */
    #[JsonProperty('amount')]
    public ?string $amount;

    /**
     * @param array{
     *   advanceId: string,
     *   invoiceId: string,
     *   date?: ?DateTime,
     *   amount?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->advanceId = $values['advanceId'];
        $this->invoiceId = $values['invoiceId'];
        $this->date = $values['date'] ?? null;
        $this->amount = $values['amount'] ?? null;
    }
}
