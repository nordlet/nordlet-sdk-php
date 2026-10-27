<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\CompaniesCreateAccountRequestVatPeriod;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Account\Types\CompaniesCreateAccountRequestAddress;
use Nordlet\Account\Types\CompaniesCreateAccountRequestDefaultInvoiceLocale;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Account\Types\CompaniesCreateAccountRequestAccountsKeptBy;
use Nordlet\Account\Types\CompaniesCreateAccountRequestCountryCode;

class CompaniesCreateAccountRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @var ?string $smeExemptionNumber
     */
    #[JsonProperty('smeExemptionNumber')]
    public ?string $smeExemptionNumber;

    /**
     * @var ?bool $isVatPayer
     */
    #[JsonProperty('isVatPayer')]
    public ?bool $isVatPayer;

    /**
     * @var ?value-of<CompaniesCreateAccountRequestVatPeriod> $vatPeriod
     */
    #[JsonProperty('vatPeriod')]
    public ?string $vatPeriod;

    /**
     * @var ?int $fiscalYearEndMonth
     */
    #[JsonProperty('fiscalYearEndMonth')]
    public ?int $fiscalYearEndMonth;

    /**
     * @var ?string $timeZone
     */
    #[JsonProperty('timeZone')]
    public ?string $timeZone;

    /**
     * @var ?array<string, string> $filingOptions
     */
    #[JsonProperty('filingOptions'), ArrayType(['string' => 'string'])]
    public ?array $filingOptions;

    /**
     * @var ?CompaniesCreateAccountRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?CompaniesCreateAccountRequestAddress $address;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $bankName
     */
    #[JsonProperty('bankName')]
    public ?string $bankName;

    /**
     * @var ?string $bankBic
     */
    #[JsonProperty('bankBic')]
    public ?string $bankBic;

    /**
     * @var ?string $bankCode Sort code, routing number, BSB, IFSC or institution number
     */
    #[JsonProperty('bankCode')]
    public ?string $bankCode;

    /**
     * @var ?string $bankBranchCode Transit number (Canada)
     */
    #[JsonProperty('bankBranchCode')]
    public ?string $bankBranchCode;

    /**
     * @var ?string $bankAccountNumber
     */
    #[JsonProperty('bankAccountNumber')]
    public ?string $bankAccountNumber;

    /**
     * @var ?string $invoicePrefix Prefix of the numbers of invoices issued without a document series; SF when not set
     */
    #[JsonProperty('invoicePrefix')]
    public ?string $invoicePrefix;

    /**
     * @var ?value-of<CompaniesCreateAccountRequestDefaultInvoiceLocale> $defaultInvoiceLocale Language a new invoice starts with when neither the invoice nor its partner names one
     */
    #[JsonProperty('defaultInvoiceLocale')]
    public ?string $defaultInvoiceLocale;

    /**
     * @var ?string $defaultInvoiceNote Note a new invoice, proforma or advance invoice starts with when it names no notes
     */
    #[JsonProperty('defaultInvoiceNote')]
    public ?string $defaultInvoiceNote;

    /**
     * @var ?string $peppolId
     */
    #[JsonProperty('peppolId')]
    public ?string $peppolId;

    /**
     * @var ?string $sepaCreditorId
     */
    #[JsonProperty('sepaCreditorId')]
    public ?string $sepaCreditorId;

    /**
     * @var ?string $defaultInvoiceCurrency
     */
    #[JsonProperty('defaultInvoiceCurrency')]
    public ?string $defaultInvoiceCurrency;

    /**
     * @var ?string $legalForm
     */
    #[JsonProperty('legalForm')]
    public ?string $legalForm;

    /**
     * @var ?string $registryName
     */
    #[JsonProperty('registryName')]
    public ?string $registryName;

    /**
     * @var ?DateTime $incorporatedOn
     */
    #[JsonProperty('incorporatedOn'), Date(Date::TYPE_DATE)]
    public ?DateTime $incorporatedOn;

    /**
     * @var ?string $shareCapital
     */
    #[JsonProperty('shareCapital')]
    public ?string $shareCapital;

    /**
     * @var ?value-of<CompaniesCreateAccountRequestAccountsKeptBy> $accountsKeptBy
     */
    #[JsonProperty('accountsKeptBy')]
    public ?string $accountsKeptBy;

    /**
     * @var ?string $bookkeeperName
     */
    #[JsonProperty('bookkeeperName')]
    public ?string $bookkeeperName;

    /**
     * @var ?string $auditorName
     */
    #[JsonProperty('auditorName')]
    public ?string $auditorName;

    /**
     * @var ?string $auditorRegistrationNumber
     */
    #[JsonProperty('auditorRegistrationNumber')]
    public ?string $auditorRegistrationNumber;

    /**
     * @var ?bool $auditRequired
     */
    #[JsonProperty('auditRequired')]
    public ?bool $auditRequired;

    /**
     * @var ?value-of<CompaniesCreateAccountRequestCountryCode> $countryCode Jurisdiction the company is registered in (immutable after creation)
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @var ?string $baseCurrency Currency the ledger is kept in; defaults to the national currency of countryCode (immutable after creation)
     */
    #[JsonProperty('baseCurrency')]
    public ?string $baseCurrency;

    /**
     * @var ?bool $isSandbox Sandbox companies hold test data and are purged immediately on delete (immutable after creation)
     */
    #[JsonProperty('isSandbox')]
    public ?bool $isSandbox;

    /**
     * @var ?bool $cashBasis The company determines its profit on a cash basis (receipts and payments, in Germany the Einnahmenüberschussrechnung of § 4 Abs. 3 EStG); it gets the cash-basis returns in its filing calendar (immutable after creation)
     */
    #[JsonProperty('cashBasis')]
    public ?bool $cashBasis;

    /**
     * @param array{
     *   name: string,
     *   code?: ?string,
     *   vatCode?: ?string,
     *   smeExemptionNumber?: ?string,
     *   isVatPayer?: ?bool,
     *   vatPeriod?: ?value-of<CompaniesCreateAccountRequestVatPeriod>,
     *   fiscalYearEndMonth?: ?int,
     *   timeZone?: ?string,
     *   filingOptions?: ?array<string, string>,
     *   address?: ?CompaniesCreateAccountRequestAddress,
     *   email?: ?string,
     *   phone?: ?string,
     *   iban?: ?string,
     *   bankName?: ?string,
     *   bankBic?: ?string,
     *   bankCode?: ?string,
     *   bankBranchCode?: ?string,
     *   bankAccountNumber?: ?string,
     *   invoicePrefix?: ?string,
     *   defaultInvoiceLocale?: ?value-of<CompaniesCreateAccountRequestDefaultInvoiceLocale>,
     *   defaultInvoiceNote?: ?string,
     *   peppolId?: ?string,
     *   sepaCreditorId?: ?string,
     *   defaultInvoiceCurrency?: ?string,
     *   legalForm?: ?string,
     *   registryName?: ?string,
     *   incorporatedOn?: ?DateTime,
     *   shareCapital?: ?string,
     *   accountsKeptBy?: ?value-of<CompaniesCreateAccountRequestAccountsKeptBy>,
     *   bookkeeperName?: ?string,
     *   auditorName?: ?string,
     *   auditorRegistrationNumber?: ?string,
     *   auditRequired?: ?bool,
     *   countryCode?: ?value-of<CompaniesCreateAccountRequestCountryCode>,
     *   baseCurrency?: ?string,
     *   isSandbox?: ?bool,
     *   cashBasis?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->code = $values['code'] ?? null;
        $this->vatCode = $values['vatCode'] ?? null;
        $this->smeExemptionNumber = $values['smeExemptionNumber'] ?? null;
        $this->isVatPayer = $values['isVatPayer'] ?? null;
        $this->vatPeriod = $values['vatPeriod'] ?? null;
        $this->fiscalYearEndMonth = $values['fiscalYearEndMonth'] ?? null;
        $this->timeZone = $values['timeZone'] ?? null;
        $this->filingOptions = $values['filingOptions'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->iban = $values['iban'] ?? null;
        $this->bankName = $values['bankName'] ?? null;
        $this->bankBic = $values['bankBic'] ?? null;
        $this->bankCode = $values['bankCode'] ?? null;
        $this->bankBranchCode = $values['bankBranchCode'] ?? null;
        $this->bankAccountNumber = $values['bankAccountNumber'] ?? null;
        $this->invoicePrefix = $values['invoicePrefix'] ?? null;
        $this->defaultInvoiceLocale = $values['defaultInvoiceLocale'] ?? null;
        $this->defaultInvoiceNote = $values['defaultInvoiceNote'] ?? null;
        $this->peppolId = $values['peppolId'] ?? null;
        $this->sepaCreditorId = $values['sepaCreditorId'] ?? null;
        $this->defaultInvoiceCurrency = $values['defaultInvoiceCurrency'] ?? null;
        $this->legalForm = $values['legalForm'] ?? null;
        $this->registryName = $values['registryName'] ?? null;
        $this->incorporatedOn = $values['incorporatedOn'] ?? null;
        $this->shareCapital = $values['shareCapital'] ?? null;
        $this->accountsKeptBy = $values['accountsKeptBy'] ?? null;
        $this->bookkeeperName = $values['bookkeeperName'] ?? null;
        $this->auditorName = $values['auditorName'] ?? null;
        $this->auditorRegistrationNumber = $values['auditorRegistrationNumber'] ?? null;
        $this->auditRequired = $values['auditRequired'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->baseCurrency = $values['baseCurrency'] ?? null;
        $this->isSandbox = $values['isSandbox'] ?? null;
        $this->cashBasis = $values['cashBasis'] ?? null;
    }
}
