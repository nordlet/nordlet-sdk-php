<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItInailAutoliquidazioneF24DeclarationsRequestPositionsItem extends JsonSerializableType
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
     * @var string $tassoRegolazione
     */
    #[JsonProperty('tassoRegolazione')]
    public string $tassoRegolazione;

    /**
     * @var string $tassoRata
     */
    #[JsonProperty('tassoRata')]
    public string $tassoRata;

    /**
     * @var ?string $riduzioneRegolazione
     */
    #[JsonProperty('riduzioneRegolazione')]
    public ?string $riduzioneRegolazione;

    /**
     * @var ?string $riduzioneRata
     */
    #[JsonProperty('riduzioneRata')]
    public ?string $riduzioneRata;

    /**
     * @var ?string $quoteEsenti
     */
    #[JsonProperty('quoteEsenti')]
    public ?string $quoteEsenti;

    /**
     * @var ?string $retribuzioniRata
     */
    #[JsonProperty('retribuzioniRata')]
    public ?string $retribuzioniRata;

    /**
     * @var ?array<string> $employeeIds
     */
    #[JsonProperty('employeeIds'), ArrayType(['string'])]
    public ?array $employeeIds;

    /**
     * @param array{
     *   pat: string,
     *   patControlCode: string,
     *   voce: string,
     *   tassoRegolazione: string,
     *   tassoRata: string,
     *   riduzioneRegolazione?: ?string,
     *   riduzioneRata?: ?string,
     *   quoteEsenti?: ?string,
     *   retribuzioniRata?: ?string,
     *   employeeIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pat = $values['pat'];
        $this->patControlCode = $values['patControlCode'];
        $this->voce = $values['voce'];
        $this->tassoRegolazione = $values['tassoRegolazione'];
        $this->tassoRata = $values['tassoRata'];
        $this->riduzioneRegolazione = $values['riduzioneRegolazione'] ?? null;
        $this->riduzioneRata = $values['riduzioneRata'] ?? null;
        $this->quoteEsenti = $values['quoteEsenti'] ?? null;
        $this->retribuzioniRata = $values['retribuzioniRata'] ?? null;
        $this->employeeIds = $values['employeeIds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
