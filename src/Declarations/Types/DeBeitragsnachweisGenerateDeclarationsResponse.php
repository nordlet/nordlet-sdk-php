<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DeBeitragsnachweisGenerateDeclarationsResponse extends JsonSerializableType
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
     * @var array<DeBeitragsnachweisGenerateDeclarationsResponseRecordsItem> $records
     */
    #[JsonProperty('records'), ArrayType([DeBeitragsnachweisGenerateDeclarationsResponseRecordsItem::class])]
    public array $records;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   fileName: string,
     *   content: string,
     *   source: string,
     *   records: array<DeBeitragsnachweisGenerateDeclarationsResponseRecordsItem>,
     *   warnings: array<string>,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
