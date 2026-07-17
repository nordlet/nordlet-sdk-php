<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AgreementsInsurancePoliciesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var ?string $premium
     */
    #[JsonProperty('premium')]
    public ?string $premium;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   policyNumber: string,
     *   insuredObject: string,
     *   fromDate: string,
     *   toDate: string,
     *   currency: string,
     *   createdAt: string,
     *   insurerPartnerId?: ?string,
     *   premium?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->insurerPartnerId = $values['insurerPartnerId'] ?? null;
        $this->policyNumber = $values['policyNumber'];
        $this->insuredObject = $values['insuredObject'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->premium = $values['premium'] ?? null;
        $this->currency = $values['currency'];
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
