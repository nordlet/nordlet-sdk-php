<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DebtAgingReportsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $partnerName
     */
    #[JsonProperty('partnerName')]
    public string $partnerName;

    /**
     * @var string $current
     */
    #[JsonProperty('current')]
    public string $current;

    /**
     * @var string $d1To30
     */
    #[JsonProperty('d1to30')]
    public string $d1To30;

    /**
     * @var string $d31To60
     */
    #[JsonProperty('d31to60')]
    public string $d31To60;

    /**
     * @var string $d61To90
     */
    #[JsonProperty('d61to90')]
    public string $d61To90;

    /**
     * @var string $over90
     */
    #[JsonProperty('over90')]
    public string $over90;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   partnerId: string,
     *   partnerName: string,
     *   current: string,
     *   d1To30: string,
     *   d31To60: string,
     *   d61To90: string,
     *   over90: string,
     *   total: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->partnerName = $values['partnerName'];
        $this->current = $values['current'];
        $this->d1To30 = $values['d1To30'];
        $this->d31To60 = $values['d31To60'];
        $this->d61To90 = $values['d61To90'];
        $this->over90 = $values['over90'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
