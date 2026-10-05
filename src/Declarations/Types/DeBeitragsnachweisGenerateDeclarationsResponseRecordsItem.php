<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DeBeitragsnachweisGenerateDeclarationsResponseRecordsItem extends JsonSerializableType
{
    /**
     * @var string $betriebsnummerKrankenkasse
     */
    #[JsonProperty('betriebsnummerKrankenkasse')]
    public string $betriebsnummerKrankenkasse;

    /**
     * @var string $faelligkeitstag
     */
    #[JsonProperty('faelligkeitstag')]
    public string $faelligkeitstag;

    /**
     * @var string $kvAllgemein
     */
    #[JsonProperty('kvAllgemein')]
    public string $kvAllgemein;

    /**
     * @var string $kvZusatzbeitrag
     */
    #[JsonProperty('kvZusatzbeitrag')]
    public string $kvZusatzbeitrag;

    /**
     * @var string $pauschsteuer
     */
    #[JsonProperty('pauschsteuer')]
    public string $pauschsteuer;

    /**
     * @var string $beitragssatzAllgemein
     */
    #[JsonProperty('beitragssatzAllgemein')]
    public string $beitragssatzAllgemein;

    /**
     * @var string $summe
     */
    #[JsonProperty('summe')]
    public string $summe;

    /**
     * @var array<DeBeitragsnachweisGenerateDeclarationsResponseRecordsItemPositionenItem> $positionen
     */
    #[JsonProperty('positionen'), ArrayType([DeBeitragsnachweisGenerateDeclarationsResponseRecordsItemPositionenItem::class])]
    public array $positionen;

    /**
     * @var string $record
     */
    #[JsonProperty('record')]
    public string $record;

    /**
     * @param array{
     *   betriebsnummerKrankenkasse: string,
     *   faelligkeitstag: string,
     *   kvAllgemein: string,
     *   kvZusatzbeitrag: string,
     *   pauschsteuer: string,
     *   beitragssatzAllgemein: string,
     *   summe: string,
     *   positionen: array<DeBeitragsnachweisGenerateDeclarationsResponseRecordsItemPositionenItem>,
     *   record: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->betriebsnummerKrankenkasse = $values['betriebsnummerKrankenkasse'];
        $this->faelligkeitstag = $values['faelligkeitstag'];
        $this->kvAllgemein = $values['kvAllgemein'];
        $this->kvZusatzbeitrag = $values['kvZusatzbeitrag'];
        $this->pauschsteuer = $values['pauschsteuer'];
        $this->beitragssatzAllgemein = $values['beitragssatzAllgemein'];
        $this->summe = $values['summe'];
        $this->positionen = $values['positionen'];
        $this->record = $values['record'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
