<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AgreementsAgreementsGenerateInvoiceResponse extends JsonSerializableType
{
    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var string $periodStart
     */
    #[JsonProperty('periodStart')]
    public string $periodStart;

    /**
     * @var string $periodEnd
     */
    #[JsonProperty('periodEnd')]
    public string $periodEnd;

    /**
     * @var ?string $renewedEndDate
     */
    #[JsonProperty('renewedEndDate')]
    public ?string $renewedEndDate;

    /**
     * @param array{
     *   invoiceId: string,
     *   periodStart: string,
     *   periodEnd: string,
     *   renewedEndDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceId = $values['invoiceId'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->renewedEndDate = $values['renewedEndDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
