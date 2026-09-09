<?php

namespace Nordlet\Capture\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CaptureSettingsUpdateRequest extends JsonSerializableType
{
    /**
     * @var ?bool $intakeEnabled
     */
    #[JsonProperty('intakeEnabled')]
    public ?bool $intakeEnabled;

    /**
     * @var ?bool $captureAutoExtract
     */
    #[JsonProperty('captureAutoExtract')]
    public ?bool $captureAutoExtract;

    /**
     * @param array{
     *   intakeEnabled?: ?bool,
     *   captureAutoExtract?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->intakeEnabled = $values['intakeEnabled'] ?? null;
        $this->captureAutoExtract = $values['captureAutoExtract'] ?? null;
    }
}
