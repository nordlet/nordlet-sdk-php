<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AgreementsBillingRunAgreementsResponseGeneratedItem extends JsonSerializableType
{
    /**
     * @var string $agreementId
     */
    #[JsonProperty('agreementId')]
    public string $agreementId;

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
     * @param array{
     *   agreementId: string,
     *   invoiceId: string,
     *   periodStart: string,
     *   periodEnd: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->agreementId = $values['agreementId'];
        $this->invoiceId = $values['invoiceId'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
