<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class InvoicesEinvoiceXmlSalesResponse extends JsonSerializableType
{
    /**
     * @var string $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

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
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   format: string,
     *   system: string,
     *   fileName: string,
     *   contentType: string,
     *   data: string,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->format = $values['format'];
        $this->system = $values['system'];
        $this->fileName = $values['fileName'];
        $this->contentType = $values['contentType'];
        $this->data = $values['data'];
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
