<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\ItInailAutoliquidazioneComputeDeclarationsRequestPositionsItem;
use Nordlet\Core\Types\ArrayType;

class ItInailAutoliquidazioneComputeDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var array<ItInailAutoliquidazioneComputeDeclarationsRequestPositionsItem> $positions
     */
    #[JsonProperty('positions'), ArrayType([ItInailAutoliquidazioneComputeDeclarationsRequestPositionsItem::class])]
    public array $positions;

    /**
     * @var ?string $rataAnticipata
     */
    #[JsonProperty('rataAnticipata')]
    public ?string $rataAnticipata;

    /**
     * @var ?bool $rateazione
     */
    #[JsonProperty('rateazione')]
    public ?bool $rateazione;

    /**
     * @var ?string $codiceDitta
     */
    #[JsonProperty('codiceDitta')]
    public ?string $codiceDitta;

    /**
     * @var ?string $codiceDittaControlCode
     */
    #[JsonProperty('codiceDittaControlCode')]
    public ?string $codiceDittaControlCode;

    /**
     * @var ?string $sedeInail
     */
    #[JsonProperty('sedeInail')]
    public ?string $sedeInail;

    /**
     * @param array{
     *   year: int,
     *   positions: array<ItInailAutoliquidazioneComputeDeclarationsRequestPositionsItem>,
     *   rataAnticipata?: ?string,
     *   rateazione?: ?bool,
     *   codiceDitta?: ?string,
     *   codiceDittaControlCode?: ?string,
     *   sedeInail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->positions = $values['positions'];
        $this->rataAnticipata = $values['rataAnticipata'] ?? null;
        $this->rateazione = $values['rateazione'] ?? null;
        $this->codiceDitta = $values['codiceDitta'] ?? null;
        $this->codiceDittaControlCode = $values['codiceDittaControlCode'] ?? null;
        $this->sedeInail = $values['sedeInail'] ?? null;
    }
}
