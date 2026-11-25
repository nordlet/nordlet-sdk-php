<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItInailAutoliquidazioneComputeDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var array<ItInailAutoliquidazioneComputeDeclarationsResponsePositionsItem> $positions
     */
    #[JsonProperty('positions'), ArrayType([ItInailAutoliquidazioneComputeDeclarationsResponsePositionsItem::class])]
    public array $positions;

    /**
     * @var ItInailAutoliquidazioneComputeDeclarationsResponseRegolazione $regolazione
     */
    #[JsonProperty('regolazione')]
    public ItInailAutoliquidazioneComputeDeclarationsResponseRegolazione $regolazione;

    /**
     * @var ItInailAutoliquidazioneComputeDeclarationsResponseRata $rata
     */
    #[JsonProperty('rata')]
    public ItInailAutoliquidazioneComputeDeclarationsResponseRata $rata;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @var array<ItInailAutoliquidazioneComputeDeclarationsResponseInstalmentsItem> $instalments
     */
    #[JsonProperty('instalments'), ArrayType([ItInailAutoliquidazioneComputeDeclarationsResponseInstalmentsItem::class])]
    public array $instalments;

    /**
     * @var array<ItInailAutoliquidazioneComputeDeclarationsResponseF24Item> $f24
     */
    #[JsonProperty('f24'), ArrayType([ItInailAutoliquidazioneComputeDeclarationsResponseF24Item::class])]
    public array $f24;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   year: int,
     *   positions: array<ItInailAutoliquidazioneComputeDeclarationsResponsePositionsItem>,
     *   regolazione: ItInailAutoliquidazioneComputeDeclarationsResponseRegolazione,
     *   rata: ItInailAutoliquidazioneComputeDeclarationsResponseRata,
     *   total: string,
     *   instalments: array<ItInailAutoliquidazioneComputeDeclarationsResponseInstalmentsItem>,
     *   f24: array<ItInailAutoliquidazioneComputeDeclarationsResponseF24Item>,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->positions = $values['positions'];
        $this->regolazione = $values['regolazione'];
        $this->rata = $values['rata'];
        $this->total = $values['total'];
        $this->instalments = $values['instalments'];
        $this->f24 = $values['f24'];
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
