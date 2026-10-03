<?php

namespace Nordlet\Calendar\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CalendarDownloadRequest extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @param array{
     *   key: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
    }
}
