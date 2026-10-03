<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtSdFfdataResponse extends JsonSerializableType
{
    /**
     * @var value-of<PostV1DeclarationsLtSdFfdataResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @var int $rows
     */
    #[JsonProperty('rows')]
    public int $rows;

    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   type: value-of<PostV1DeclarationsLtSdFfdataResponseType>,
     *   fileName: string,
     *   xml: string,
     *   rows: int,
     *   pageCount: int,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->fileName = $values['fileName'];
        $this->xml = $values['xml'];
        $this->rows = $values['rows'];
        $this->pageCount = $values['pageCount'];
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
