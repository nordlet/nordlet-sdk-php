<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PaymentsExportPayrollResponse extends JsonSerializableType
{
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
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @param array{
     *   messageId: string,
     *   fileName: string,
     *   transactionCount: int,
     *   controlSum: string,
     *   xml: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->messageId = $values['messageId'];
        $this->fileName = $values['fileName'];
        $this->transactionCount = $values['transactionCount'];
        $this->controlSum = $values['controlSum'];
        $this->xml = $values['xml'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
