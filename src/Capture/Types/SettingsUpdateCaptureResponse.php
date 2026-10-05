<?php

namespace Nordlet\Capture\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SettingsUpdateCaptureResponse extends JsonSerializableType
{
    /**
     * @var bool $intakeEnabled
     */
    #[JsonProperty('intakeEnabled')]
    public bool $intakeEnabled;

    /**
     * @var bool $captureAutoExtract
     */
    #[JsonProperty('captureAutoExtract')]
    public bool $captureAutoExtract;

    /**
     * @var ?string $intakeAddress
     */
    #[JsonProperty('intakeAddress')]
    public ?string $intakeAddress;

    /**
     * @var bool $ocrConfigured
     */
    #[JsonProperty('ocrConfigured')]
    public bool $ocrConfigured;

    /**
     * @param array{
     *   intakeEnabled: bool,
     *   captureAutoExtract: bool,
     *   ocrConfigured: bool,
     *   intakeAddress?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->intakeEnabled = $values['intakeEnabled'];
        $this->captureAutoExtract = $values['captureAutoExtract'];
        $this->intakeAddress = $values['intakeAddress'] ?? null;
        $this->ocrConfigured = $values['ocrConfigured'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
