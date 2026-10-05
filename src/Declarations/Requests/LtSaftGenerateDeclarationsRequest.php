<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Declarations\Types\LtSaftGenerateDeclarationsRequestDataType;

class LtSaftGenerateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var ?value-of<LtSaftGenerateDeclarationsRequestDataType> $dataType
     */
    #[JsonProperty('dataType')]
    public ?string $dataType;

    /**
     * @var ?bool $persist
     */
    #[JsonProperty('persist')]
    public ?bool $persist;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   dataType?: ?value-of<LtSaftGenerateDeclarationsRequestDataType>,
     *   persist?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->dataType = $values['dataType'] ?? null;
        $this->persist = $values['persist'] ?? null;
    }
}
