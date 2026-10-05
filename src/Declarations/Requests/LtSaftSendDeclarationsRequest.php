<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Declarations\Types\LtSaftSendDeclarationsRequestDataType;

class LtSaftSendDeclarationsRequest extends JsonSerializableType
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
     * @var ?value-of<LtSaftSendDeclarationsRequestDataType> $dataType
     */
    #[JsonProperty('dataType')]
    public ?string $dataType;

    /**
     * @var ?bool $confirm
     */
    #[JsonProperty('confirm')]
    public ?bool $confirm;

    /**
     * @var ?bool $amend
     */
    #[JsonProperty('amend')]
    public ?bool $amend;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   dataType?: ?value-of<LtSaftSendDeclarationsRequestDataType>,
     *   confirm?: ?bool,
     *   amend?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->dataType = $values['dataType'] ?? null;
        $this->confirm = $values['confirm'] ?? null;
        $this->amend = $values['amend'] ?? null;
    }
}
