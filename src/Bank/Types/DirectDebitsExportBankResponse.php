<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class DirectDebitsExportBankResponse extends JsonSerializableType
{
    /**
     * @var value-of<DirectDebitsExportBankResponseFormat> $format
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
     * @var DateTime $collectionDate
     */
    #[JsonProperty('collectionDate'), Date(Date::TYPE_DATE)]
    public DateTime $collectionDate;

    /**
     * @param array{
     *   format: value-of<DirectDebitsExportBankResponseFormat>,
     *   messageId: string,
     *   fileName: string,
     *   contentType: string,
     *   transactionCount: int,
     *   controlSum: string,
     *   content: string,
     *   collectionDate: DateTime,
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
        $this->collectionDate = $values['collectionDate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
