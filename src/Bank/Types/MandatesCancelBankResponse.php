<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class MandatesCancelBankResponse extends JsonSerializableType
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
     * @var value-of<MandatesCancelBankResponseScheme> $scheme
     */
    #[JsonProperty('scheme')]
    public string $scheme;

    /**
     * @var value-of<MandatesCancelBankResponseSequenceType> $sequenceType
     */
    #[JsonProperty('sequenceType')]
    public string $sequenceType;

    /**
     * @var value-of<MandatesCancelBankResponseStatus> $status
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
     * @var string $expiresOn
     */
    #[JsonProperty('expiresOn')]
    public string $expiresOn;

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
     *   scheme: value-of<MandatesCancelBankResponseScheme>,
     *   sequenceType: value-of<MandatesCancelBankResponseSequenceType>,
     *   status: value-of<MandatesCancelBankResponseStatus>,
     *   debtorName: string,
     *   iban: string,
     *   signatureDate: DateTime,
     *   collectionsCount: int,
     *   expiresOn: string,
     *   createdAt: DateTime,
     *   bic?: ?string,
     *   lastCollectionDate?: ?DateTime,
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
