<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesGetDeclarationsResponseInputAnnex4StockOption extends JsonSerializableType
{
    /**
     * @var value-of<EeTsdAnnexesGetDeclarationsResponseInputAnnex4StockOptionEvent> $event `sale`: the option was sold (4081 – 4083); `exercise`: the shares were acquired (4081 – 4082 – 4083)
     */
    #[JsonProperty('event')]
    public string $event;

    /**
     * @var string $marketPrice 4081: market price
     */
    #[JsonProperty('marketPrice')]
    public string $marketPrice;

    /**
     * @var ?string $exercisePrice 4082: exercise price, for `exercise` only
     */
    #[JsonProperty('exercisePrice')]
    public ?string $exercisePrice;

    /**
     * @var string $premium 4083: option premium
     */
    #[JsonProperty('premium')]
    public string $premium;

    /**
     * @param array{
     *   event: value-of<EeTsdAnnexesGetDeclarationsResponseInputAnnex4StockOptionEvent>,
     *   marketPrice: string,
     *   premium: string,
     *   exercisePrice?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->event = $values['event'];
        $this->marketPrice = $values['marketPrice'];
        $this->exercisePrice = $values['exercisePrice'] ?? null;
        $this->premium = $values['premium'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
