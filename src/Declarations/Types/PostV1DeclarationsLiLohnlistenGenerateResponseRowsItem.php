<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLiLohnlistenGenerateResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $peid
     */
    #[JsonProperty('peid')]
    public string $peid;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $vorname
     */
    #[JsonProperty('vorname')]
    public string $vorname;

    /**
     * @var string $geburtsdatum
     */
    #[JsonProperty('geburtsdatum')]
    public string $geburtsdatum;

    /**
     * @var string $strasse
     */
    #[JsonProperty('strasse')]
    public string $strasse;

    /**
     * @var string $hausnummer
     */
    #[JsonProperty('hausnummer')]
    public string $hausnummer;

    /**
     * @var string $plz
     */
    #[JsonProperty('plz')]
    public string $plz;

    /**
     * @var string $ort
     */
    #[JsonProperty('ort')]
    public string $ort;

    /**
     * @var string $wohnland
     */
    #[JsonProperty('wohnland')]
    public string $wohnland;

    /**
     * @var string $brutto
     */
    #[JsonProperty('brutto')]
    public string $brutto;

    /**
     * @var string $lohnsteuer
     */
    #[JsonProperty('lohnsteuer')]
    public string $lohnsteuer;

    /**
     * @var string $abrechnungVon
     */
    #[JsonProperty('abrechnungVon')]
    public string $abrechnungVon;

    /**
     * @var string $abrechnungBis
     */
    #[JsonProperty('abrechnungBis')]
    public string $abrechnungBis;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   employeeId: string,
     *   peid: string,
     *   name: string,
     *   vorname: string,
     *   geburtsdatum: string,
     *   strasse: string,
     *   hausnummer: string,
     *   plz: string,
     *   ort: string,
     *   wohnland: string,
     *   brutto: string,
     *   lohnsteuer: string,
     *   abrechnungVon: string,
     *   abrechnungBis: string,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->peid = $values['peid'];
        $this->name = $values['name'];
        $this->vorname = $values['vorname'];
        $this->geburtsdatum = $values['geburtsdatum'];
        $this->strasse = $values['strasse'];
        $this->hausnummer = $values['hausnummer'];
        $this->plz = $values['plz'];
        $this->ort = $values['ort'];
        $this->wohnland = $values['wohnland'];
        $this->brutto = $values['brutto'];
        $this->lohnsteuer = $values['lohnsteuer'];
        $this->abrechnungVon = $values['abrechnungVon'];
        $this->abrechnungBis = $values['abrechnungBis'];
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
