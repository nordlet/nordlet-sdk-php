<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItInailAutoliquidazioneComputeDeclarationsResponsePositionsItem extends JsonSerializableType
{
    /**
     * @var string $pat
     */
    #[JsonProperty('pat')]
    public string $pat;

    /**
     * @var string $patControlCode
     */
    #[JsonProperty('patControlCode')]
    public string $patControlCode;

    /**
     * @var string $voce
     */
    #[JsonProperty('voce')]
    public string $voce;

    /**
     * @var int $employees
     */
    #[JsonProperty('employees')]
    public int $employees;

    /**
     * @var string $retribuzioni
     */
    #[JsonProperty('retribuzioni')]
    public string $retribuzioni;

    /**
     * @var string $quoteEsenti
     */
    #[JsonProperty('quoteEsenti')]
    public string $quoteEsenti;

    /**
     * @var string $imponibileRegolazione
     */
    #[JsonProperty('imponibileRegolazione')]
    public string $imponibileRegolazione;

    /**
     * @var string $premioRegolazione
     */
    #[JsonProperty('premioRegolazione')]
    public string $premioRegolazione;

    /**
     * @var string $riduzioneRegolazione
     */
    #[JsonProperty('riduzioneRegolazione')]
    public string $riduzioneRegolazione;

    /**
     * @var string $totaleRegolazione
     */
    #[JsonProperty('totaleRegolazione')]
    public string $totaleRegolazione;

    /**
     * @var string $imponibileRata
     */
    #[JsonProperty('imponibileRata')]
    public string $imponibileRata;

    /**
     * @var string $premioRata
     */
    #[JsonProperty('premioRata')]
    public string $premioRata;

    /**
     * @var string $riduzioneRata
     */
    #[JsonProperty('riduzioneRata')]
    public string $riduzioneRata;

    /**
     * @var string $totaleRata
     */
    #[JsonProperty('totaleRata')]
    public string $totaleRata;

    /**
     * @param array{
     *   pat: string,
     *   patControlCode: string,
     *   voce: string,
     *   employees: int,
     *   retribuzioni: string,
     *   quoteEsenti: string,
     *   imponibileRegolazione: string,
     *   premioRegolazione: string,
     *   riduzioneRegolazione: string,
     *   totaleRegolazione: string,
     *   imponibileRata: string,
     *   premioRata: string,
     *   riduzioneRata: string,
     *   totaleRata: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pat = $values['pat'];
        $this->patControlCode = $values['patControlCode'];
        $this->voce = $values['voce'];
        $this->employees = $values['employees'];
        $this->retribuzioni = $values['retribuzioni'];
        $this->quoteEsenti = $values['quoteEsenti'];
        $this->imponibileRegolazione = $values['imponibileRegolazione'];
        $this->premioRegolazione = $values['premioRegolazione'];
        $this->riduzioneRegolazione = $values['riduzioneRegolazione'];
        $this->totaleRegolazione = $values['totaleRegolazione'];
        $this->imponibileRata = $values['imponibileRata'];
        $this->premioRata = $values['premioRata'];
        $this->riduzioneRata = $values['riduzioneRata'];
        $this->totaleRata = $values['totaleRata'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
