<?php

namespace Nordlet\Calendar\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

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
     * @param array{
     *   key: string,
     *   amend?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->amend = $values['amend'] ?? null;
    }
}
