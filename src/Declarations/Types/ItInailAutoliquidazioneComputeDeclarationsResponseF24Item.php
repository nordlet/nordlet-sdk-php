<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItInailAutoliquidazioneComputeDeclarationsResponseF24Item extends JsonSerializableType
{
    /**
     * @var string $codiceSede
     */
    #[JsonProperty('codiceSede')]
    public string $codiceSede;

    /**
     * @var string $codiceDitta
     */
    #[JsonProperty('codiceDitta')]
    public string $codiceDitta;

    /**
     * @var string $cc
     */
    #[JsonProperty('cc')]
    public string $cc;

    /**
     * @var string $numeroRiferimento
     */
    #[JsonProperty('numeroRiferimento')]
    public string $numeroRiferimento;

    /**
     * @var string $causale
     */
    #[JsonProperty('causale')]
    public string $causale;

    /**
     * @var string $importo
     */
    #[JsonProperty('importo')]
    public string $importo;

    /**
     * @var ?bool $credito
     */
    #[JsonProperty('credito')]
    public ?bool $credito;

    /**
     * @param array{
     *   codiceSede: string,
     *   codiceDitta: string,
     *   cc: string,
     *   numeroRiferimento: string,
     *   causale: string,
     *   importo: string,
     *   credito?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->codiceSede = $values['codiceSede'];
        $this->codiceDitta = $values['codiceDitta'];
        $this->cc = $values['cc'];
        $this->numeroRiferimento = $values['numeroRiferimento'];
        $this->causale = $values['causale'];
        $this->importo = $values['importo'];
        $this->credito = $values['credito'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
