<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankMandatesCreateRequestScheme;
use Nordlet\Bank\Types\PostV1BankMandatesCreateRequestSequenceType;

class PostV1BankMandatesCreateRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

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
     * @var ?value-of<PostV1BankMandatesCreateRequestScheme> $scheme
     */
    #[JsonProperty('scheme')]
    public ?string $scheme;

    /**
     * @var ?value-of<PostV1BankMandatesCreateRequestSequenceType> $sequenceType
     */
    #[JsonProperty('sequenceType')]
    public ?string $sequenceType;

    /**
     * @var string $signatureDate
     */
    #[JsonProperty('signatureDate')]
    public string $signatureDate;

    /**
     * @var ?string $reference
     */
    #[JsonProperty('reference')]
    public ?string $reference;

    /**
     * @var ?string $debtorName
     */
    #[JsonProperty('debtorName')]
    public ?string $debtorName;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   partnerId: string,
     *   iban: string,
     *   signatureDate: string,
     *   bic?: ?string,
     *   scheme?: ?value-of<PostV1BankMandatesCreateRequestScheme>,
     *   sequenceType?: ?value-of<PostV1BankMandatesCreateRequestSequenceType>,
     *   reference?: ?string,
     *   debtorName?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->iban = $values['iban'];
        $this->bic = $values['bic'] ?? null;
        $this->scheme = $values['scheme'] ?? null;
        $this->sequenceType = $values['sequenceType'] ?? null;
        $this->signatureDate = $values['signatureDate'];
        $this->reference = $values['reference'] ?? null;
        $this->debtorName = $values['debtorName'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
