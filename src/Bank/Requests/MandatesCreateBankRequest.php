<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\MandatesCreateBankRequestAccountType;
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
     * @var ?string $bankCode Sort code (Bacs) or routing number (ACH), for a mandate without an IBAN
     */
    #[JsonProperty('bankCode')]
    public ?string $bankCode;

    /**
     * @var ?string $bankAccountNumber Account number, for a mandate without an IBAN
     */
    #[JsonProperty('bankAccountNumber')]
    public ?string $bankAccountNumber;

    /**
     * @var ?value-of<MandatesCreateBankRequestAccountType> $accountType Checking or savings account; a US ACH file needs it
     */
    #[JsonProperty('accountType')]
    public ?string $accountType;

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
     *   signatureDate: DateTime,
     *   iban?: ?string,
     *   bic?: ?string,
     *   bankCode?: ?string,
     *   bankAccountNumber?: ?string,
     *   accountType?: ?value-of<MandatesCreateBankRequestAccountType>,
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
        $this->iban = $values['iban'] ?? null;
        $this->bic = $values['bic'] ?? null;
        $this->bankCode = $values['bankCode'] ?? null;
        $this->bankAccountNumber = $values['bankAccountNumber'] ?? null;
        $this->accountType = $values['accountType'] ?? null;
        $this->scheme = $values['scheme'] ?? null;
        $this->sequenceType = $values['sequenceType'] ?? null;
        $this->signatureDate = $values['signatureDate'];
        $this->reference = $values['reference'] ?? null;
        $this->debtorName = $values['debtorName'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
