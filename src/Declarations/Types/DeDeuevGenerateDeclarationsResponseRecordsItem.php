<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DeDeuevGenerateDeclarationsResponseRecordsItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $abgabegrund
     */
    #[JsonProperty('abgabegrund')]
    public string $abgabegrund;

    /**
     * @var string $versicherungsnummer
     */
    #[JsonProperty('versicherungsnummer')]
    public string $versicherungsnummer;

    /**
     * @var string $betriebsnummerKrankenkasse
     */
    #[JsonProperty('betriebsnummerKrankenkasse')]
    public string $betriebsnummerKrankenkasse;

    /**
     * @var string $personengruppe
     */
    #[JsonProperty('personengruppe')]
    public string $personengruppe;

    /**
     * @var string $beitragsgruppe
     */
    #[JsonProperty('beitragsgruppe')]
    public string $beitragsgruppe;

    /**
     * @var string $zeitraumBeginn
     */
    #[JsonProperty('zeitraumBeginn')]
    public string $zeitraumBeginn;

    /**
     * @var ?string $zeitraumEnde
     */
    #[JsonProperty('zeitraumEnde')]
    public ?string $zeitraumEnde;

    /**
     * @var string $entgelt
     */
    #[JsonProperty('entgelt')]
    public string $entgelt;

    /**
     * @var string $record
     */
    #[JsonProperty('record')]
    public string $record;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   employeeId: string,
     *   name: string,
     *   abgabegrund: string,
     *   versicherungsnummer: string,
     *   betriebsnummerKrankenkasse: string,
     *   personengruppe: string,
     *   beitragsgruppe: string,
     *   zeitraumBeginn: string,
     *   entgelt: string,
     *   record: string,
     *   warnings: array<string>,
     *   zeitraumEnde?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->name = $values['name'];
        $this->abgabegrund = $values['abgabegrund'];
        $this->versicherungsnummer = $values['versicherungsnummer'];
        $this->betriebsnummerKrankenkasse = $values['betriebsnummerKrankenkasse'];
        $this->personengruppe = $values['personengruppe'];
        $this->beitragsgruppe = $values['beitragsgruppe'];
        $this->zeitraumBeginn = $values['zeitraumBeginn'];
        $this->zeitraumEnde = $values['zeitraumEnde'] ?? null;
        $this->entgelt = $values['entgelt'];
        $this->record = $values['record'];
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
