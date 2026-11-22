<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class GbP11DItemsListDeclarationsResponseItemsItemItemLoan extends JsonSerializableType
{
    /**
     * @var int $jointBorrowers
     */
    #[JsonProperty('jointBorrowers')]
    public int $jointBorrowers;

    /**
     * @var string $outstandingStart
     */
    #[JsonProperty('outstandingStart')]
    public string $outstandingStart;

    /**
     * @var string $outstandingEnd
     */
    #[JsonProperty('outstandingEnd')]
    public string $outstandingEnd;

    /**
     * @var string $maximumOutstanding
     */
    #[JsonProperty('maximumOutstanding')]
    public string $maximumOutstanding;

    /**
     * @var string $interestPaid
     */
    #[JsonProperty('interestPaid')]
    public string $interestPaid;

    /**
     * @var ?DateTime $madeOn
     */
    #[JsonProperty('madeOn'), Date(Date::TYPE_DATE)]
    public ?DateTime $madeOn;

    /**
     * @var ?DateTime $dischargedOn
     */
    #[JsonProperty('dischargedOn'), Date(Date::TYPE_DATE)]
    public ?DateTime $dischargedOn;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   jointBorrowers: int,
     *   outstandingStart: string,
     *   outstandingEnd: string,
     *   maximumOutstanding: string,
     *   interestPaid: string,
     *   amount: string,
     *   madeOn?: ?DateTime,
     *   dischargedOn?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->jointBorrowers = $values['jointBorrowers'];
        $this->outstandingStart = $values['outstandingStart'];
        $this->outstandingEnd = $values['outstandingEnd'];
        $this->maximumOutstanding = $values['maximumOutstanding'];
        $this->interestPaid = $values['interestPaid'];
        $this->madeOn = $values['madeOn'] ?? null;
        $this->dischargedOn = $values['dischargedOn'] ?? null;
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
