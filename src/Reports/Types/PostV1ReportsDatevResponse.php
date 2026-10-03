<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsDatevResponse extends JsonSerializableType
{
    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $contentType
     */
    #[JsonProperty('contentType')]
    public string $contentType;

    /**
     * @var string $data
     */
    #[JsonProperty('data')]
    public string $data;

    /**
     * @var int $bookings
     */
    #[JsonProperty('bookings')]
    public int $bookings;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public array $notes;

    /**
     * @param array{
     *   fileName: string,
     *   contentType: string,
     *   data: string,
     *   bookings: int,
     *   source: string,
     *   warnings: array<string>,
     *   notes: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileName = $values['fileName'];
        $this->contentType = $values['contentType'];
        $this->data = $values['data'];
        $this->bookings = $values['bookings'];
        $this->source = $values['source'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
