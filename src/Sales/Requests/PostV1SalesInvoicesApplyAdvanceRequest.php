<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesInvoicesApplyAdvanceRequest extends JsonSerializableType
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
     * @var ?string $date
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @param array{
     *   advanceId: string,
     *   invoiceId: string,
     *   date?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->advanceId = $values['advanceId'];
        $this->invoiceId = $values['invoiceId'];
        $this->date = $values['date'] ?? null;
    }
}
