<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class MandatesAuddisExportBankResponse extends JsonSerializableType
{
    /**
     * @var value-of<MandatesAuddisExportBankResponseFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var string $messageId
     */
    #[JsonProperty('messageId')]
    public string $messageId;

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
     * @var int $transactionCount
     */
    #[JsonProperty('transactionCount')]
    public int $transactionCount;

    /**
     * @var string $controlSum
     */
    #[JsonProperty('controlSum')]
    public string $controlSum;

    /**
     * @var string $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var DateTime $processingDate
     */
    #[JsonProperty('processingDate'), Date(Date::TYPE_DATE)]
    public DateTime $processingDate;

    /**
     * @var array<string> $lodged
     */
    #[JsonProperty('lodged'), ArrayType(['string'])]
    public array $lodged;

    /**
     * @var array<string> $cancelled
     */
    #[JsonProperty('cancelled'), ArrayType(['string'])]
    public array $cancelled;

    /**
     * @param array{
     *   format: value-of<MandatesAuddisExportBankResponseFormat>,
     *   messageId: string,
     *   fileName: string,
     *   contentType: string,
     *   transactionCount: int,
     *   controlSum: string,
     *   content: string,
     *   processingDate: DateTime,
     *   lodged: array<string>,
     *   cancelled: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->format = $values['format'];
        $this->messageId = $values['messageId'];
        $this->fileName = $values['fileName'];
        $this->contentType = $values['contentType'];
        $this->transactionCount = $values['transactionCount'];
        $this->controlSum = $values['controlSum'];
        $this->content = $values['content'];
        $this->processingDate = $values['processingDate'];
        $this->lodged = $values['lodged'];
        $this->cancelled = $values['cancelled'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
