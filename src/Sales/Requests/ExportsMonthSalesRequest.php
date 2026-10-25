<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\ExportsMonthSalesRequestFormat;

class ExportsMonthSalesRequest extends JsonSerializableType
{
    /**
     * @var string $month
     */
    #[JsonProperty('month')]
    public string $month;

    /**
     * @var value-of<ExportsMonthSalesRequestFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @param array{
     *   month: string,
     *   format: value-of<ExportsMonthSalesRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->month = $values['month'];
        $this->format = $values['format'];
    }
}
