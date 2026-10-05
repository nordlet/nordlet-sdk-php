<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class InsurancePoliciesCreateAgreementsRequest extends JsonSerializableType
{
    /**
     * @var ?string $insurerPartnerId
     */
    #[JsonProperty('insurerPartnerId')]
    public ?string $insurerPartnerId;

    /**
     * @var string $policyNumber
     */
    #[JsonProperty('policyNumber')]
    public string $policyNumber;

    /**
     * @var string $insuredObject
     */
    #[JsonProperty('insuredObject')]
    public string $insuredObject;

    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var ?string $premium
     */
    #[JsonProperty('premium')]
    public ?string $premium;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   policyNumber: string,
     *   insuredObject: string,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   insurerPartnerId?: ?string,
     *   premium?: ?string,
     *   currency?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->insurerPartnerId = $values['insurerPartnerId'] ?? null;
        $this->policyNumber = $values['policyNumber'];
        $this->insuredObject = $values['insuredObject'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->premium = $values['premium'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
