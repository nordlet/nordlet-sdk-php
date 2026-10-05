<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DeReturnFactsSetDeclarationsRequestFactsParticipationsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $sharePercent
     */
    #[JsonProperty('sharePercent')]
    public string $sharePercent;

    /**
     * @var string $dividends
     */
    #[JsonProperty('dividends')]
    public string $dividends;

    /**
     * @param array{
     *   name: string,
     *   countryCode: string,
     *   sharePercent: string,
     *   dividends: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->countryCode = $values['countryCode'];
        $this->sharePercent = $values['sharePercent'];
        $this->dividends = $values['dividends'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
