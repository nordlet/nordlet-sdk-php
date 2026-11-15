<?php

namespace Nordlet\Calendar\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Calendar\Types\SubmitCalendarRequestCorrection;
use Nordlet\Core\Types\ArrayType;

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
     * @param array{
     *   key: string,
     *   amend?: ?bool,
     *   correction?: ?SubmitCalendarRequestCorrection,
     *   documentKeys?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->amend = $values['amend'] ?? null;
        $this->correction = $values['correction'] ?? null;
        $this->documentKeys = $values['documentKeys'] ?? null;
    }
}
