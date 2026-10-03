<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsDeReturnFactsSetRequestFactsRelocation extends JsonSerializableType
{
    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $from
     */
    #[JsonProperty('from')]
    public string $from;

    /**
     * @var string $to
     */
    #[JsonProperty('to')]
    public string $to;

    /**
     * @param array{
     *   date: string,
     *   from: string,
     *   to: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->from = $values['from'];
        $this->to = $values['to'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
