<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class MeAccountResponseConsent extends JsonSerializableType
{
    /**
     * @var ?string $termsVersion
     */
    #[JsonProperty('termsVersion')]
    public ?string $termsVersion;

    /**
     * @var ?DateTime $termsAcceptedAt
     */
    #[JsonProperty('termsAcceptedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $termsAcceptedAt;

    /**
     * @var ?string $dpaVersion
     */
    #[JsonProperty('dpaVersion')]
    public ?string $dpaVersion;

    /**
     * @var ?DateTime $dpaAcceptedAt
     */
    #[JsonProperty('dpaAcceptedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $dpaAcceptedAt;

    /**
     * @var string $currentTermsVersion
     */
    #[JsonProperty('currentTermsVersion')]
    public string $currentTermsVersion;

    /**
     * @var string $currentDpaVersion
     */
    #[JsonProperty('currentDpaVersion')]
    public string $currentDpaVersion;

    /**
     * @var bool $required
     */
    #[JsonProperty('required')]
    public bool $required;

    /**
     * @param array{
     *   currentTermsVersion: string,
     *   currentDpaVersion: string,
     *   required: bool,
     *   termsVersion?: ?string,
     *   termsAcceptedAt?: ?DateTime,
     *   dpaVersion?: ?string,
     *   dpaAcceptedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->termsVersion = $values['termsVersion'] ?? null;
        $this->termsAcceptedAt = $values['termsAcceptedAt'] ?? null;
        $this->dpaVersion = $values['dpaVersion'] ?? null;
        $this->dpaAcceptedAt = $values['dpaAcceptedAt'] ?? null;
        $this->currentTermsVersion = $values['currentTermsVersion'];
        $this->currentDpaVersion = $values['currentDpaVersion'];
        $this->required = $values['required'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
