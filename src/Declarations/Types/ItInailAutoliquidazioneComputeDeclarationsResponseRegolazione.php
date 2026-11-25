<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItInailAutoliquidazioneComputeDeclarationsResponseRegolazione extends JsonSerializableType
{
    /**
     * @var string $totale
     */
    #[JsonProperty('totale')]
    public string $totale;

    /**
     * @var string $addizionale
     */
    #[JsonProperty('addizionale')]
    public string $addizionale;

    /**
     * @var string $rataAnticipata
     */
    #[JsonProperty('rataAnticipata')]
    public string $rataAnticipata;

    /**
     * @var string $importo
     */
    #[JsonProperty('importo')]
    public string $importo;

    /**
     * @param array{
     *   totale: string,
     *   addizionale: string,
     *   rataAnticipata: string,
     *   importo: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->totale = $values['totale'];
        $this->addizionale = $values['addizionale'];
        $this->rataAnticipata = $values['rataAnticipata'];
        $this->importo = $values['importo'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
