<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class DirectDebitsCandidatesBankResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $fullNumber
     */
    #[JsonProperty('fullNumber')]
    public ?string $fullNumber;

    /**
     * @var ?DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $issueDate;

    /**
     * @var ?DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $dueDate;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?string $partnerName
     */
    #[JsonProperty('partnerName')]
    public ?string $partnerName;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var string $paidAmount
     */
    #[JsonProperty('paidAmount')]
    public string $paidAmount;

    /**
     * @var string $remaining
     */
    #[JsonProperty('remaining')]
    public string $remaining;

    /**
     * @var ?string $mandateId
     */
    #[JsonProperty('mandateId')]
    public ?string $mandateId;

    /**
     * @var ?string $mandateReference
     */
    #[JsonProperty('mandateReference')]
    public ?string $mandateReference;

    /**
     * @var ?DateTime $mandateSignatureDate
     */
    #[JsonProperty('mandateSignatureDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $mandateSignatureDate;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   currency: string,
     *   grossTotal: string,
     *   paidAmount: string,
     *   remaining: string,
     *   fullNumber?: ?string,
     *   issueDate?: ?DateTime,
     *   dueDate?: ?DateTime,
     *   partnerName?: ?string,
     *   mandateId?: ?string,
     *   mandateReference?: ?string,
     *   mandateSignatureDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->fullNumber = $values['fullNumber'] ?? null;
        $this->issueDate = $values['issueDate'] ?? null;
        $this->dueDate = $values['dueDate'] ?? null;
        $this->partnerId = $values['partnerId'];
        $this->partnerName = $values['partnerName'] ?? null;
        $this->currency = $values['currency'];
        $this->grossTotal = $values['grossTotal'];
        $this->paidAmount = $values['paidAmount'];
        $this->remaining = $values['remaining'];
        $this->mandateId = $values['mandateId'] ?? null;
        $this->mandateReference = $values['mandateReference'] ?? null;
        $this->mandateSignatureDate = $values['mandateSignatureDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
