<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLiLohndeklarationGenerateResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $versichertennummer
     */
    #[JsonProperty('versichertennummer')]
    public string $versichertennummer;

    /**
     * @var string $vorname
     */
    #[JsonProperty('vorname')]
    public string $vorname;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $geschlecht
     */
    #[JsonProperty('geschlecht')]
    public string $geschlecht;

    /**
     * @var string $heimatstaat
     */
    #[JsonProperty('heimatstaat')]
    public string $heimatstaat;

    /**
     * @var string $eintrittsdatum
     */
    #[JsonProperty('eintrittsdatum')]
    public string $eintrittsdatum;

    /**
     * @var string $austrittsdatum
     */
    #[JsonProperty('austrittsdatum')]
    public string $austrittsdatum;

    /**
     * @var string $beschaeftigtVon
     */
    #[JsonProperty('beschaeftigtVon')]
    public string $beschaeftigtVon;

    /**
     * @var string $beschaeftigtBis
     */
    #[JsonProperty('beschaeftigtBis')]
    public string $beschaeftigtBis;

    /**
     * @var string $beschaeftigungsgrad
     */
    #[JsonProperty('beschaeftigungsgrad')]
    public string $beschaeftigungsgrad;

    /**
     * @var string $ahvLohn
     */
    #[JsonProperty('ahvLohn')]
    public string $ahvLohn;

    /**
     * @var string $alv
     */
    #[JsonProperty('alv')]
    public string $alv;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   employeeId: string,
     *   versichertennummer: string,
     *   vorname: string,
     *   name: string,
     *   geschlecht: string,
     *   heimatstaat: string,
     *   eintrittsdatum: string,
     *   austrittsdatum: string,
     *   beschaeftigtVon: string,
     *   beschaeftigtBis: string,
     *   beschaeftigungsgrad: string,
     *   ahvLohn: string,
     *   alv: string,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->versichertennummer = $values['versichertennummer'];
        $this->vorname = $values['vorname'];
        $this->name = $values['name'];
        $this->geschlecht = $values['geschlecht'];
        $this->heimatstaat = $values['heimatstaat'];
        $this->eintrittsdatum = $values['eintrittsdatum'];
        $this->austrittsdatum = $values['austrittsdatum'];
        $this->beschaeftigtVon = $values['beschaeftigtVon'];
        $this->beschaeftigtBis = $values['beschaeftigtBis'];
        $this->beschaeftigungsgrad = $values['beschaeftigungsgrad'];
        $this->ahvLohn = $values['ahvLohn'];
        $this->alv = $values['alv'];
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
