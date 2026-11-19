<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class MandatesListBankResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var value-of<MandatesListBankResponseRowsItemScheme> $scheme
     */
    #[JsonProperty('scheme')]
    public string $scheme;

    /**
     * @var value-of<MandatesListBankResponseRowsItemSequenceType> $sequenceType
     */
    #[JsonProperty('sequenceType')]
    public string $sequenceType;

    /**
     * @var value-of<MandatesListBankResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $debtorName
     */
    #[JsonProperty('debtorName')]
    public string $debtorName;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $bic
     */
    #[JsonProperty('bic')]
    public ?string $bic;

    /**
     * @var ?string $bankCode
     */
    #[JsonProperty('bankCode')]
    public ?string $bankCode;

    /**
     * @var ?string $bankAccountNumber
     */
    #[JsonProperty('bankAccountNumber')]
    public ?string $bankAccountNumber;

    /**
     * @var ?value-of<MandatesListBankResponseRowsItemAccountType> $accountType Checking or savings account; a US ACH file needs it
     */
    #[JsonProperty('accountType')]
    public ?string $accountType;

    /**
     * @var DateTime $signatureDate
     */
    #[JsonProperty('signatureDate'), Date(Date::TYPE_DATE)]
    public DateTime $signatureDate;

    /**
     * @var int $collectionsCount
     */
    #[JsonProperty('collectionsCount')]
    public int $collectionsCount;

    /**
     * @var ?DateTime $lastCollectionDate
     */
    #[JsonProperty('lastCollectionDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $lastCollectionDate;

    /**
     * @var ?string $expiresOn
     */
    #[JsonProperty('expiresOn')]
    public ?string $expiresOn;

    /**
     * @var ?string $lodgedOn
     */
    #[JsonProperty('lodgedOn')]
    public ?string $lodgedOn;

    /**
     * @var ?string $cancellationLodgedOn
     */
    #[JsonProperty('cancellationLodgedOn')]
    public ?string $cancellationLodgedOn;

    /**
     * @var ?DateTime $cancelledAt
     */
    #[JsonProperty('cancelledAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $cancelledAt;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   reference: string,
     *   scheme: value-of<MandatesListBankResponseRowsItemScheme>,
     *   sequenceType: value-of<MandatesListBankResponseRowsItemSequenceType>,
     *   status: value-of<MandatesListBankResponseRowsItemStatus>,
     *   debtorName: string,
     *   signatureDate: DateTime,
     *   collectionsCount: int,
     *   createdAt: DateTime,
     *   iban?: ?string,
     *   bic?: ?string,
     *   bankCode?: ?string,
     *   bankAccountNumber?: ?string,
     *   accountType?: ?value-of<MandatesListBankResponseRowsItemAccountType>,
     *   lastCollectionDate?: ?DateTime,
     *   expiresOn?: ?string,
     *   lodgedOn?: ?string,
     *   cancellationLodgedOn?: ?string,
     *   cancelledAt?: ?DateTime,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'];
        $this->reference = $values['reference'];
        $this->scheme = $values['scheme'];
        $this->sequenceType = $values['sequenceType'];
        $this->status = $values['status'];
        $this->debtorName = $values['debtorName'];
        $this->iban = $values['iban'] ?? null;
        $this->bic = $values['bic'] ?? null;
        $this->bankCode = $values['bankCode'] ?? null;
        $this->bankAccountNumber = $values['bankAccountNumber'] ?? null;
        $this->accountType = $values['accountType'] ?? null;
        $this->signatureDate = $values['signatureDate'];
        $this->collectionsCount = $values['collectionsCount'];
        $this->lastCollectionDate = $values['lastCollectionDate'] ?? null;
        $this->expiresOn = $values['expiresOn'] ?? null;
        $this->lodgedOn = $values['lodgedOn'] ?? null;
        $this->cancellationLodgedOn = $values['cancellationLodgedOn'] ?? null;
        $this->cancelledAt = $values['cancelledAt'] ?? null;
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
