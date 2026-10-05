<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PlPit11GenerateDeclarationsResponsePersonsItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $firstName
     */
    #[JsonProperty('firstName')]
    public string $firstName;

    /**
     * @var string $lastName
     */
    #[JsonProperty('lastName')]
    public string $lastName;

    /**
     * @var ?string $pesel
     */
    #[JsonProperty('pesel')]
    public ?string $pesel;

    /**
     * @var string $revenue
     */
    #[JsonProperty('revenue')]
    public string $revenue;

    /**
     * @var string $deductibleCosts
     */
    #[JsonProperty('deductibleCosts')]
    public string $deductibleCosts;

    /**
     * @var string $advanceWithheld
     */
    #[JsonProperty('advanceWithheld')]
    public string $advanceWithheld;

    /**
     * @var string $socialContributions
     */
    #[JsonProperty('socialContributions')]
    public string $socialContributions;

    /**
     * @var string $healthContributions
     */
    #[JsonProperty('healthContributions')]
    public string $healthContributions;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   employeeId: string,
     *   firstName: string,
     *   lastName: string,
     *   revenue: string,
     *   deductibleCosts: string,
     *   advanceWithheld: string,
     *   socialContributions: string,
     *   healthContributions: string,
     *   fileName: string,
     *   xml: string,
     *   warnings: array<string>,
     *   pesel?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
        $this->pesel = $values['pesel'] ?? null;
        $this->revenue = $values['revenue'];
        $this->deductibleCosts = $values['deductibleCosts'];
        $this->advanceWithheld = $values['advanceWithheld'];
        $this->socialContributions = $values['socialContributions'];
        $this->healthContributions = $values['healthContributions'];
        $this->fileName = $values['fileName'];
        $this->xml = $values['xml'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
