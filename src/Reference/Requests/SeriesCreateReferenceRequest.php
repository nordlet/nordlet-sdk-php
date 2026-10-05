<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SeriesCreateReferenceRequest extends JsonSerializableType
{
    /**
     * @var string $documentType
     */
    #[JsonProperty('documentType')]
    public string $documentType;

    /**
     * @var ?string $prefix
     */
    #[JsonProperty('prefix')]
    public ?string $prefix;

    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var ?int $startAt
     */
    #[JsonProperty('startAt')]
    public ?int $startAt;

    /**
     * @param array{
     *   documentType: string,
     *   year: int,
     *   prefix?: ?string,
     *   startAt?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentType = $values['documentType'];
        $this->prefix = $values['prefix'] ?? null;
        $this->year = $values['year'];
        $this->startAt = $values['startAt'] ?? null;
    }
}
