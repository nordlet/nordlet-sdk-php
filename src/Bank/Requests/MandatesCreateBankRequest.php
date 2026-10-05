<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\MandatesCreateBankRequestScheme;
use Nordlet\Bank\Types\MandatesCreateBankRequestSequenceType;
use DateTime;
use Nordlet\Core\Types\Date;

class MandatesCreateBankRequest extends JsonSerializableType
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
     * @var ?value-of<MandatesCreateBankRequestScheme> $scheme
     */
    #[JsonProperty('scheme')]
    public ?string $scheme;

    /**
     * @var ?value-of<MandatesCreateBankRequestSequenceType> $sequenceType
     */
    #[JsonProperty('sequenceType')]
    public ?string $sequenceType;

    /**
     * @var DateTime $signatureDate
     */
    #[JsonProperty('signatureDate'), Date(Date::TYPE_DATE)]
    public DateTime $signatureDate;

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
     *   signatureDate: DateTime,
     *   bic?: ?string,
     *   scheme?: ?value-of<MandatesCreateBankRequestScheme>,
     *   sequenceType?: ?value-of<MandatesCreateBankRequestSequenceType>,
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
