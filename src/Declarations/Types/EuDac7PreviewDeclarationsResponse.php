<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EuDac7PreviewDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var bool $sendsDirectly
     */
    #[JsonProperty('sendsDirectly')]
    public bool $sendsDirectly;

    /**
     * @var string $messageTypeIndic
     */
    #[JsonProperty('messageTypeIndic')]
    public string $messageTypeIndic;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var array<EuDac7PreviewDeclarationsResponseSellersItem> $sellers
     */
    #[JsonProperty('sellers'), ArrayType([EuDac7PreviewDeclarationsResponseSellersItem::class])]
    public array $sellers;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   year: int,
     *   country: string,
     *   system: string,
     *   sendsDirectly: bool,
     *   messageTypeIndic: string,
     *   currency: string,
     *   sellers: array<EuDac7PreviewDeclarationsResponseSellersItem>,
     *   warnings: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->country = $values['country'];
        $this->system = $values['system'];
        $this->sendsDirectly = $values['sendsDirectly'];
        $this->messageTypeIndic = $values['messageTypeIndic'];
        $this->currency = $values['currency'];
        $this->sellers = $values['sellers'];
        $this->warnings = $values['warnings'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
