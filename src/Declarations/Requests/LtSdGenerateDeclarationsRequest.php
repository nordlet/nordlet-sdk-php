<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\LtSdGenerateDeclarationsRequestType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class LtSdGenerateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var value-of<LtSdGenerateDeclarationsRequestType> $type
     */
    #[JsonProperty('type')]
    public string $type;

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
     * @param array{
     *   type: value-of<LtSdGenerateDeclarationsRequestType>,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
    }
}
