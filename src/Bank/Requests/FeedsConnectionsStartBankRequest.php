<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\FeedsConnectionsStartBankRequestPsuType;

class FeedsConnectionsStartBankRequest extends JsonSerializableType
{
    /**
     * @var string $aspspName
     */
    #[JsonProperty('aspspName')]
    public string $aspspName;

    /**
     * @var string $aspspCountry
     */
    #[JsonProperty('aspspCountry')]
    public string $aspspCountry;

    /**
     * @var ?value-of<FeedsConnectionsStartBankRequestPsuType> $psuType
     */
    #[JsonProperty('psuType')]
    public ?string $psuType;

    /**
     * @var ?string $redirectUrl
     */
    #[JsonProperty('redirectUrl')]
    public ?string $redirectUrl;

    /**
     * @var ?int $validForDays
     */
    #[JsonProperty('validForDays')]
    public ?int $validForDays;

    /**
     * @var ?string $language
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @param array{
     *   aspspName: string,
     *   aspspCountry: string,
     *   psuType?: ?value-of<FeedsConnectionsStartBankRequestPsuType>,
     *   redirectUrl?: ?string,
     *   validForDays?: ?int,
     *   language?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->aspspName = $values['aspspName'];
        $this->aspspCountry = $values['aspspCountry'];
        $this->psuType = $values['psuType'] ?? null;
        $this->redirectUrl = $values['redirectUrl'] ?? null;
        $this->validForDays = $values['validForDays'] ?? null;
        $this->language = $values['language'] ?? null;
    }
}
