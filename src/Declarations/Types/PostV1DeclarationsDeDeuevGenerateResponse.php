<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsDeDeuevGenerateResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var array<PostV1DeclarationsDeDeuevGenerateResponseRecordsItem> $records
     */
    #[JsonProperty('records'), ArrayType([PostV1DeclarationsDeDeuevGenerateResponseRecordsItem::class])]
    public array $records;

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
     *   year: int,
     *   month: int,
     *   fileName: string,
     *   content: string,
     *   source: string,
     *   records: array<PostV1DeclarationsDeDeuevGenerateResponseRecordsItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->fileName = $values['fileName'];
        $this->content = $values['content'];
        $this->source = $values['source'];
        $this->records = $values['records'];
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
