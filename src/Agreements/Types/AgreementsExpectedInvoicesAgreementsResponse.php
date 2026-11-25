<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class AgreementsExpectedInvoicesAgreementsResponse extends JsonSerializableType
{
    /**
     * @var string $agreementId
     */
    #[JsonProperty('agreementId')]
    public string $agreementId;

    /**
     * @var string $number
     */
    #[JsonProperty('number')]
    public string $number;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var array<AgreementsExpectedInvoicesAgreementsResponsePeriodsItem> $periods
     */
    #[JsonProperty('periods'), ArrayType([AgreementsExpectedInvoicesAgreementsResponsePeriodsItem::class])]
    public array $periods;

    /**
     * @param array{
     *   agreementId: string,
     *   number: string,
     *   currency: string,
     *   periods: array<AgreementsExpectedInvoicesAgreementsResponsePeriodsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->agreementId = $values['agreementId'];
        $this->number = $values['number'];
        $this->currency = $values['currency'];
        $this->periods = $values['periods'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
