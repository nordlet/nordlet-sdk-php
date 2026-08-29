<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankMandatesListResponseRowsItem extends JsonSerializableType
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
     * @var value-of<PostV1BankMandatesListResponseRowsItemScheme> $scheme
     */
    #[JsonProperty('scheme')]
    public string $scheme;

    /**
     * @var value-of<PostV1BankMandatesListResponseRowsItemSequenceType> $sequenceType
     */
    #[JsonProperty('sequenceType')]
    public string $sequenceType;

    /**
     * @var value-of<PostV1BankMandatesListResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $debtorName
     */
    #[JsonProperty('debtorName')]
    public string $debtorName;

    /**
     * @var string $iban
     */
    #[JsonProperty('iban')]
    public string $iban;

    /**
     * @var ?string $bic
     */
    #[JsonProperty('bic')]
    public ?string $bic;

    /**
     * @var string $signatureDate
     */
    #[JsonProperty('signatureDate')]
    public string $signatureDate;

    /**
     * @var int $collectionsCount
     */
    #[JsonProperty('collectionsCount')]
    public int $collectionsCount;

    /**
     * @var ?string $lastCollectionDate
     */
    #[JsonProperty('lastCollectionDate')]
    public ?string $lastCollectionDate;

    /**
     * @var string $expiresOn
     */
    #[JsonProperty('expiresOn')]
    public string $expiresOn;

    /**
     * @var ?string $cancelledAt
     */
    #[JsonProperty('cancelledAt')]
    public ?string $cancelledAt;

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
     *   partnerId: string,
     *   reference: string,
     *   scheme: value-of<PostV1BankMandatesListResponseRowsItemScheme>,
     *   sequenceType: value-of<PostV1BankMandatesListResponseRowsItemSequenceType>,
     *   status: value-of<PostV1BankMandatesListResponseRowsItemStatus>,
     *   debtorName: string,
     *   iban: string,
     *   signatureDate: string,
     *   collectionsCount: int,
     *   expiresOn: string,
     *   createdAt: string,
     *   bic?: ?string,
     *   lastCollectionDate?: ?string,
     *   cancelledAt?: ?string,
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
        $this->iban = $values['iban'];
        $this->bic = $values['bic'] ?? null;
        $this->signatureDate = $values['signatureDate'];
        $this->collectionsCount = $values['collectionsCount'];
        $this->lastCollectionDate = $values['lastCollectionDate'] ?? null;
        $this->expiresOn = $values['expiresOn'];
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
