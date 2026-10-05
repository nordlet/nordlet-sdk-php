<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\CompaniesUpdateAccountRequestVatPeriod;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;
use Nordlet\Account\Types\CompaniesUpdateAccountRequestAddress;
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
     *   isVatPayer?: ?bool,
     *   vatPeriod?: ?value-of<CompaniesUpdateAccountRequestVatPeriod>,
     *   fiscalYearEndMonth?: ?int,
     *   timeZone?: ?string,
     *   filingOptions?: ?array<string, ?string>,
     *   address?: ?CompaniesUpdateAccountRequestAddress,
     *   email?: ?string,
     *   phone?: ?string,
     *   iban?: ?string,
     *   bankName?: ?string,
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
