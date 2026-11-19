<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CompaniesHouseGetPartnersResponse extends JsonSerializableType
{
    /**
     * @var string $companyNumber
     */
    #[JsonProperty('companyNumber')]
    public string $companyNumber;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $jurisdiction
     */
    #[JsonProperty('jurisdiction')]
    public ?string $jurisdiction;

    /**
     * @var ?string $incorporatedOn
     */
    #[JsonProperty('incorporatedOn')]
    public ?string $incorporatedOn;

    /**
     * @var ?string $ceasedOn
     */
    #[JsonProperty('ceasedOn')]
    public ?string $ceasedOn;

    /**
     * @var ?CompaniesHouseGetPartnersResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?CompaniesHouseGetPartnersResponseAddress $address;

    /**
     * @var ?CompaniesHouseGetPartnersResponseAccountingReferenceDate $accountingReferenceDate
     */
    #[JsonProperty('accountingReferenceDate')]
    public ?CompaniesHouseGetPartnersResponseAccountingReferenceDate $accountingReferenceDate;

    /**
     * @var ?string $nextAccountsDue
     */
    #[JsonProperty('nextAccountsDue')]
    public ?string $nextAccountsDue;

    /**
     * @var ?string $nextConfirmationStatementDue
     */
    #[JsonProperty('nextConfirmationStatementDue')]
    public ?string $nextConfirmationStatementDue;

    /**
     * @var array<string> $sicCodes
     */
    #[JsonProperty('sicCodes'), ArrayType(['string'])]
    public array $sicCodes;

    /**
     * @param array{
     *   companyNumber: string,
     *   name: string,
     *   sicCodes: array<string>,
     *   status?: ?string,
     *   type?: ?string,
     *   jurisdiction?: ?string,
     *   incorporatedOn?: ?string,
     *   ceasedOn?: ?string,
     *   address?: ?CompaniesHouseGetPartnersResponseAddress,
     *   accountingReferenceDate?: ?CompaniesHouseGetPartnersResponseAccountingReferenceDate,
     *   nextAccountsDue?: ?string,
     *   nextConfirmationStatementDue?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companyNumber = $values['companyNumber'];
        $this->name = $values['name'];
        $this->status = $values['status'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->jurisdiction = $values['jurisdiction'] ?? null;
        $this->incorporatedOn = $values['incorporatedOn'] ?? null;
        $this->ceasedOn = $values['ceasedOn'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->accountingReferenceDate = $values['accountingReferenceDate'] ?? null;
        $this->nextAccountsDue = $values['nextAccountsDue'] ?? null;
        $this->nextConfirmationStatementDue = $values['nextConfirmationStatementDue'] ?? null;
        $this->sicCodes = $values['sicCodes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
