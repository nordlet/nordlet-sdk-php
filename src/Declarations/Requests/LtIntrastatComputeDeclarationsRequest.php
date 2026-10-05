<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\LtIntrastatComputeDeclarationsRequestFlow;
use Nordlet\Declarations\Types\LtIntrastatComputeDeclarationsRequestTransportMode;

class LtIntrastatComputeDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var value-of<LtIntrastatComputeDeclarationsRequestFlow> $flow
     */
    #[JsonProperty('flow')]
    public string $flow;

    /**
     * @var ?string $transactionNature
     */
    #[JsonProperty('transactionNature')]
    public ?string $transactionNature;

    /**
     * @var ?string $deliveryTerms
     */
    #[JsonProperty('deliveryTerms')]
    public ?string $deliveryTerms;

    /**
     * @var ?value-of<LtIntrastatComputeDeclarationsRequestTransportMode> $transportMode
     */
    #[JsonProperty('transportMode')]
    public ?string $transportMode;

    /**
     * @var ?string $regionCode
     */
    #[JsonProperty('regionCode')]
    public ?string $regionCode;

    /**
     * @var ?bool $statisticalValueRequired
     */
    #[JsonProperty('statisticalValueRequired')]
    public ?bool $statisticalValueRequired;

    /**
     * @var ?int $preparationTimeHours
     */
    #[JsonProperty('preparationTimeHours')]
    public ?int $preparationTimeHours;

    /**
     * @var ?int $preparationTimeMinutes
     */
    #[JsonProperty('preparationTimeMinutes')]
    public ?int $preparationTimeMinutes;

    /**
     * @var ?bool $persist
     */
    #[JsonProperty('persist')]
    public ?bool $persist;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   flow: value-of<LtIntrastatComputeDeclarationsRequestFlow>,
     *   transactionNature?: ?string,
     *   deliveryTerms?: ?string,
     *   transportMode?: ?value-of<LtIntrastatComputeDeclarationsRequestTransportMode>,
     *   regionCode?: ?string,
     *   statisticalValueRequired?: ?bool,
     *   preparationTimeHours?: ?int,
     *   preparationTimeMinutes?: ?int,
     *   persist?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->flow = $values['flow'];
        $this->transactionNature = $values['transactionNature'] ?? null;
        $this->deliveryTerms = $values['deliveryTerms'] ?? null;
        $this->transportMode = $values['transportMode'] ?? null;
        $this->regionCode = $values['regionCode'] ?? null;
        $this->statisticalValueRequired = $values['statisticalValueRequired'] ?? null;
        $this->preparationTimeHours = $values['preparationTimeHours'] ?? null;
        $this->preparationTimeMinutes = $values['preparationTimeMinutes'] ?? null;
        $this->persist = $values['persist'] ?? null;
    }
}
