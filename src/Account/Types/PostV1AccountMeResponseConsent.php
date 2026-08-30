<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountMeResponseConsent extends JsonSerializableType
{
    /**
     * @var ?string $termsVersion
     */
    #[JsonProperty('termsVersion')]
    public ?string $termsVersion;

    /**
     * @var ?string $termsAcceptedAt
     */
    #[JsonProperty('termsAcceptedAt')]
    public ?string $termsAcceptedAt;

    /**
     * @var ?string $dpaVersion
     */
    #[JsonProperty('dpaVersion')]
    public ?string $dpaVersion;

    /**
     * @var ?string $dpaAcceptedAt
     */
    #[JsonProperty('dpaAcceptedAt')]
    public ?string $dpaAcceptedAt;

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
     *   termsAcceptedAt?: ?string,
     *   dpaVersion?: ?string,
     *   dpaAcceptedAt?: ?string,
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
