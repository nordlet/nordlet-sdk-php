<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsJobsCreateResponseOutputsItem extends JsonSerializableType
{
    /**
     * @var string $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var string $fileId
     */
    #[JsonProperty('fileId')]
    public string $fileId;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public int $sizeBytes;

    /**
     * @param array{
     *   format: string,
     *   fileId: string,
     *   fileName: string,
     *   sizeBytes: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->format = $values['format'];
        $this->fileId = $values['fileId'];
        $this->fileName = $values['fileName'];
        $this->sizeBytes = $values['sizeBytes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
