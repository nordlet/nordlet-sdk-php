<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;
use Nordlet\Account\Types\CompaniesUpdateAccountRequestVatPeriod;
use Nordlet\Account\Types\CompaniesUpdateAccountRequestFiscalYearWeekRule;
use Nordlet\Account\Types\CompaniesUpdateAccountRequestAddress;
use Nordlet\Account\Types\CompaniesUpdateAccountRequestDefaultInvoiceLocale;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Account\Types\CompaniesUpdateAccountRequestAccountsKeptBy;
use Nordlet\Account\Types\CompaniesUpdateAccountRequestLogo;

class CompaniesUpdateAccountRequest extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

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
     * @var ?array<string, ?string> $identifiers Registration numbers of the company other than `code` and `vatCode`, by key: `utr` (GB, Corporation Tax Unique Taxpayer Reference (UTR), 10 digits); `taxOfficeNumber` (GB, PAYE tax office number, 3 digits); `taxOfficeReference` (GB, PAYE tax office reference, 1 to 10 letters, digits or punctuation, not starting with a space); `accountsOfficeReference` (GB, Accounts Office reference, 13 characters: 3 digits, P, a letter, 7 digits and a digit or X); `ein` (US, Employer Identification Number (EIN), 9 digits whose first two are a prefix the IRS assigns); `deBusinessLicense` (US, Delaware business license number); `deWithholdingAccount` (US, Delaware withholding account number, 9 digits, the federal EIN); `deUnemploymentAccount` (US, Delaware unemployment insurance account number); `deUnemploymentRate` (US, Delaware unemployment insurance tax rate (%), a percentage from 0 to 100 with at most 4 decimals); `deEntityFileNumber` (US, Delaware Division of Corporations file number (formed in Delaware)); `deForeignEntityFileNumber` (US, Delaware Division of Corporations file number (formed in another state))
     */
    #[JsonProperty('identifiers'), ArrayType(['string' => new Union('string', 'null')])]
    public ?array $identifiers;

    /**
     * @var ?bool $isVatPayer
     */
    #[JsonProperty('isVatPayer')]
    public ?bool $isVatPayer;

    /**
     * @var ?value-of<CompaniesUpdateAccountRequestVatPeriod> $vatPeriod
     */
    #[JsonProperty('vatPeriod')]
    public ?string $vatPeriod;

    /**
     * @var ?int $vatPeriodEndMonth A month in which a VAT period ends, for VAT periods that do not follow the calendar quarters
     */
    #[JsonProperty('vatPeriodEndMonth')]
    public ?int $vatPeriodEndMonth;

    /**
     * @var ?int $fiscalYearEndMonth
     */
    #[JsonProperty('fiscalYearEndMonth')]
    public ?int $fiscalYearEndMonth;

    /**
     * @var ?int $fiscalYearEndDay Day of `fiscalYearEndMonth` the fiscal year ends on; the last day of the month when omitted
     */
    #[JsonProperty('fiscalYearEndDay')]
    public ?int $fiscalYearEndDay;

    /**
     * @var ?int $fiscalYearWeekday For a 52-53-week fiscal year: the weekday it always ends on, 0 Sunday to 6 Saturday
     */
    #[JsonProperty('fiscalYearWeekday')]
    public ?int $fiscalYearWeekday;

    /**
     * @var ?value-of<CompaniesUpdateAccountRequestFiscalYearWeekRule> $fiscalYearWeekRule With `fiscalYearWeekday`: `last` ends the year on the last such weekday of `fiscalYearEndMonth`, `nearest` on the one nearest the last day of that month
     */
    #[JsonProperty('fiscalYearWeekRule')]
    public ?string $fiscalYearWeekRule;

    /**
     * @var ?string $timeZone
     */
    #[JsonProperty('timeZone')]
    public ?string $timeZone;

    /**
     * @var ?array<string, ?string> $filingOptions
     */
    #[JsonProperty('filingOptions'), ArrayType(['string' => new Union('string', 'null')])]
    public ?array $filingOptions;

    /**
     * @var ?CompaniesUpdateAccountRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?CompaniesUpdateAccountRequestAddress $address;

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
     * @var ?value-of<CompaniesUpdateAccountRequestDefaultInvoiceLocale> $defaultInvoiceLocale Language a new invoice starts with when neither the invoice nor its partner names one
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
     * @var ?value-of<CompaniesUpdateAccountRequestAccountsKeptBy> $accountsKeptBy
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
     * @var ?CompaniesUpdateAccountRequestLogo $logo
     */
    #[JsonProperty('logo')]
    public ?CompaniesUpdateAccountRequestLogo $logo;

    /**
     * @param array{
     *   name?: ?string,
     *   code?: ?string,
     *   vatCode?: ?string,
     *   smeExemptionNumber?: ?string,
     *   identifiers?: ?array<string, ?string>,
     *   isVatPayer?: ?bool,
     *   vatPeriod?: ?value-of<CompaniesUpdateAccountRequestVatPeriod>,
     *   vatPeriodEndMonth?: ?int,
     *   fiscalYearEndMonth?: ?int,
     *   fiscalYearEndDay?: ?int,
     *   fiscalYearWeekday?: ?int,
     *   fiscalYearWeekRule?: ?value-of<CompaniesUpdateAccountRequestFiscalYearWeekRule>,
     *   timeZone?: ?string,
     *   filingOptions?: ?array<string, ?string>,
     *   address?: ?CompaniesUpdateAccountRequestAddress,
     *   email?: ?string,
     *   phone?: ?string,
     *   iban?: ?string,
     *   bankName?: ?string,
     *   bankBic?: ?string,
     *   bankCode?: ?string,
     *   bankBranchCode?: ?string,
     *   bankAccountNumber?: ?string,
     *   invoicePrefix?: ?string,
     *   defaultInvoiceLocale?: ?value-of<CompaniesUpdateAccountRequestDefaultInvoiceLocale>,
     *   defaultInvoiceNote?: ?string,
     *   peppolId?: ?string,
     *   sepaCreditorId?: ?string,
     *   defaultInvoiceCurrency?: ?string,
     *   legalForm?: ?string,
     *   registryName?: ?string,
     *   incorporatedOn?: ?DateTime,
     *   shareCapital?: ?string,
     *   accountsKeptBy?: ?value-of<CompaniesUpdateAccountRequestAccountsKeptBy>,
     *   bookkeeperName?: ?string,
     *   auditorName?: ?string,
     *   auditorRegistrationNumber?: ?string,
     *   auditRequired?: ?bool,
     *   logo?: ?CompaniesUpdateAccountRequestLogo,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->vatCode = $values['vatCode'] ?? null;
        $this->smeExemptionNumber = $values['smeExemptionNumber'] ?? null;
        $this->identifiers = $values['identifiers'] ?? null;
        $this->isVatPayer = $values['isVatPayer'] ?? null;
        $this->vatPeriod = $values['vatPeriod'] ?? null;
        $this->vatPeriodEndMonth = $values['vatPeriodEndMonth'] ?? null;
        $this->fiscalYearEndMonth = $values['fiscalYearEndMonth'] ?? null;
        $this->fiscalYearEndDay = $values['fiscalYearEndDay'] ?? null;
        $this->fiscalYearWeekday = $values['fiscalYearWeekday'] ?? null;
        $this->fiscalYearWeekRule = $values['fiscalYearWeekRule'] ?? null;
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
        $this->logo = $values['logo'] ?? null;
    }
}
