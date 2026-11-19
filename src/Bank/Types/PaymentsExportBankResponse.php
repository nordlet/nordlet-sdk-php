<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PaymentsExportBankResponse extends JsonSerializableType
{
    /**
     * @var value-of<PaymentsExportBankResponseFormat> $format
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
     * @param array{
     *   format: value-of<PaymentsExportBankResponseFormat>,
     *   messageId: string,
     *   fileName: string,
     *   contentType: string,
     *   transactionCount: int,
     *   controlSum: string,
     *   content: string,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
