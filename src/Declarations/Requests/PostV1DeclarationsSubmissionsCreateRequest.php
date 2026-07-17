<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\PostV1DeclarationsSubmissionsCreateRequestObligation;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsSubmissionsCreateRequestDataType;

class PostV1DeclarationsSubmissionsCreateRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostV1DeclarationsSubmissionsCreateRequestObligation> $obligation
     */
    #[JsonProperty('obligation')]
    public string $obligation;

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
     * @var ?value-of<PostV1DeclarationsSubmissionsCreateRequestDataType> $dataType
     */
    #[JsonProperty('dataType')]
    public ?string $dataType;

    /**
     * @param array{
     *   obligation: value-of<PostV1DeclarationsSubmissionsCreateRequestObligation>,
     *   year: int,
     *   month: int,
     *   dataType?: ?value-of<PostV1DeclarationsSubmissionsCreateRequestDataType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->obligation = $values['obligation'];
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->dataType = $values['dataType'] ?? null;
    }
}
