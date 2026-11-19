<?php

namespace Nordlet\Calendar\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Calendar\Types\SubmitCalendarRequestCorrection;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Calendar\Types\SubmitCalendarRequestDevice;

class SubmitCalendarRequest extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var ?bool $amend
     */
    #[JsonProperty('amend')]
    public ?bool $amend;

    /**
     * @var ?SubmitCalendarRequestCorrection $correction
     */
    #[JsonProperty('correction')]
    public ?SubmitCalendarRequestCorrection $correction;

    /**
     * @var ?array<string> $documentKeys
     */
    #[JsonProperty('documentKeys'), ArrayType(['string'])]
    public ?array $documentKeys;

    /**
     * @var ?SubmitCalendarRequestDevice $device Facts of the browser the user files from, which HMRC requires with every VAT (MTD) API call: `navigator.userAgent`, a UUID the browser keeps for the device, every screen (width, height, scaling factor, colour depth in bits), the window size in pixels and the time zone as `UTC±hh:mm`.
     */
    #[JsonProperty('device')]
    public ?SubmitCalendarRequestDevice $device;

    /**
     * @param array{
     *   key: string,
     *   amend?: ?bool,
     *   correction?: ?SubmitCalendarRequestCorrection,
     *   documentKeys?: ?array<string>,
     *   device?: ?SubmitCalendarRequestDevice,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->amend = $values['amend'] ?? null;
        $this->correction = $values['correction'] ?? null;
        $this->documentKeys = $values['documentKeys'] ?? null;
        $this->device = $values['device'] ?? null;
    }
}
