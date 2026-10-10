<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class EuDigitalReportingListDeclarationsResponseTransactionsItem extends JsonSerializableType
{
    /**
     * @var value-of<EuDigitalReportingListDeclarationsResponseTransactionsItemDirection> $direction
     */
    #[JsonProperty('direction')]
    public string $direction;

    /**
     * @var value-of<EuDigitalReportingListDeclarationsResponseTransactionsItemArticle> $article
     */
    #[JsonProperty('article')]
    public string $article;

    /**
     * @var string $documentId
     */
    #[JsonProperty('documentId')]
    public string $documentId;

    /**
     * @var value-of<EuDigitalReportingListDeclarationsResponseTransactionsItemDocumentType> $documentType
     */
    #[JsonProperty('documentType')]
    public string $documentType;

    /**
     * @var ?string $number
     */
    #[JsonProperty('number')]
    public ?string $number;

    /**
     * @var DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public DateTime $issueDate;

    /**
     * @var string $partnerName
     */
    #[JsonProperty('partnerName')]
    public string $partnerName;

    /**
     * @var ?string $supplierVatNumber
     */
    #[JsonProperty('supplierVatNumber')]
    public ?string $supplierVatNumber;

    /**
     * @var ?string $customerVatNumber
     */
    #[JsonProperty('customerVatNumber')]
    public ?string $customerVatNumber;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var array<EuDigitalReportingListDeclarationsResponseTransactionsItemLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([EuDigitalReportingListDeclarationsResponseTransactionsItemLinesItem::class])]
    public array $lines;

    /**
     * @var string $taxableAmount
     */
    #[JsonProperty('taxableAmount')]
    public string $taxableAmount;

    /**
     * @var ?string $vatAmount
     */
    #[JsonProperty('vatAmount')]
    public ?string $vatAmount;

    /**
     * @var ?string $exemptionReference
     */
    #[JsonProperty('exemptionReference')]
    public ?string $exemptionReference;

    /**
     * @var bool $reverseCharge
     */
    #[JsonProperty('reverseCharge')]
    public bool $reverseCharge;

    /**
     * @var ?string $correctedInvoiceNumber
     */
    #[JsonProperty('correctedInvoiceNumber')]
    public ?string $correctedInvoiceNumber;

    /**
     * @var array<string> $supplierAccounts
     */
    #[JsonProperty('supplierAccounts'), ArrayType(['string'])]
    public array $supplierAccounts;

    /**
     * @var string $reportTo
     */
    #[JsonProperty('reportTo')]
    public string $reportTo;

    /**
     * @var string $deadline
     */
    #[JsonProperty('deadline')]
    public string $deadline;

    /**
     * @var array<string> $missing
     */
    #[JsonProperty('missing'), ArrayType(['string'])]
    public array $missing;

    /**
     * @param array{
     *   direction: value-of<EuDigitalReportingListDeclarationsResponseTransactionsItemDirection>,
     *   article: value-of<EuDigitalReportingListDeclarationsResponseTransactionsItemArticle>,
     *   documentId: string,
     *   documentType: value-of<EuDigitalReportingListDeclarationsResponseTransactionsItemDocumentType>,
     *   issueDate: DateTime,
     *   partnerName: string,
     *   currency: string,
     *   lines: array<EuDigitalReportingListDeclarationsResponseTransactionsItemLinesItem>,
     *   taxableAmount: string,
     *   reverseCharge: bool,
     *   supplierAccounts: array<string>,
     *   reportTo: string,
     *   deadline: string,
     *   missing: array<string>,
     *   number?: ?string,
     *   supplierVatNumber?: ?string,
     *   customerVatNumber?: ?string,
     *   vatAmount?: ?string,
     *   exemptionReference?: ?string,
     *   correctedInvoiceNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->direction = $values['direction'];
        $this->article = $values['article'];
        $this->documentId = $values['documentId'];
        $this->documentType = $values['documentType'];
        $this->number = $values['number'] ?? null;
        $this->issueDate = $values['issueDate'];
        $this->partnerName = $values['partnerName'];
        $this->supplierVatNumber = $values['supplierVatNumber'] ?? null;
        $this->customerVatNumber = $values['customerVatNumber'] ?? null;
        $this->currency = $values['currency'];
        $this->lines = $values['lines'];
        $this->taxableAmount = $values['taxableAmount'];
        $this->vatAmount = $values['vatAmount'] ?? null;
        $this->exemptionReference = $values['exemptionReference'] ?? null;
        $this->reverseCharge = $values['reverseCharge'];
        $this->correctedInvoiceNumber = $values['correctedInvoiceNumber'] ?? null;
        $this->supplierAccounts = $values['supplierAccounts'];
        $this->reportTo = $values['reportTo'];
        $this->deadline = $values['deadline'];
        $this->missing = $values['missing'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
