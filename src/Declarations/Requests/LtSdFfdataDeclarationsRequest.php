<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\LtSdFfdataDeclarationsRequestType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class LtSdFfdataDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var value-of<LtSdFfdataDeclarationsRequestType> $type
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
     * @var ?string $managerFullName
     */
    #[JsonProperty('managerFullName')]
    public ?string $managerFullName;

    /**
     * @var ?string $preparatorDetails
     */
    #[JsonProperty('preparatorDetails')]
    public ?string $preparatorDetails;

    /**
     * @param array{
     *   type: value-of<LtSdFfdataDeclarationsRequestType>,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   managerFullName?: ?string,
     *   preparatorDetails?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->managerFullName = $values['managerFullName'] ?? null;
        $this->preparatorDetails = $values['preparatorDetails'] ?? null;
    }
}
