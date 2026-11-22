<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class GbP11DItemsCreateDeclarationsResponseItemCar extends JsonSerializableType
{
    /**
     * @var string $make
     */
    #[JsonProperty('make')]
    public string $make;

    /**
     * @var DateTime $registered
     */
    #[JsonProperty('registered'), Date(Date::TYPE_DATE)]
    public DateTime $registered;

    /**
     * @var ?DateTime $availableFrom
     */
    #[JsonProperty('availableFrom'), Date(Date::TYPE_DATE)]
    public ?DateTime $availableFrom;

    /**
     * @var ?DateTime $availableTo
     */
    #[JsonProperty('availableTo'), Date(Date::TYPE_DATE)]
    public ?DateTime $availableTo;

    /**
     * @var ?int $engineSize
     */
    #[JsonProperty('engineSize')]
    public ?int $engineSize;

    /**
     * @var ?value-of<GbP11DItemsCreateDeclarationsResponseItemCarFuel> $fuel
     */
    #[JsonProperty('fuel')]
    public ?string $fuel;

    /**
     * @var ?int $co2
     */
    #[JsonProperty('co2')]
    public ?int $co2;

    /**
     * @var ?int $zeroEmissionMileage
     */
    #[JsonProperty('zeroEmissionMileage')]
    public ?int $zeroEmissionMileage;

    /**
     * @var ?bool $noApprovedCo2
     */
    #[JsonProperty('noApprovedCo2')]
    public ?bool $noApprovedCo2;

    /**
     * @var string $listPrice
     */
    #[JsonProperty('listPrice')]
    public string $listPrice;

    /**
     * @var string $accessories
     */
    #[JsonProperty('accessories')]
    public string $accessories;

    /**
     * @var string $capitalContribution
     */
    #[JsonProperty('capitalContribution')]
    public string $capitalContribution;

    /**
     * @var string $privateUsePayment
     */
    #[JsonProperty('privateUsePayment')]
    public string $privateUsePayment;

    /**
     * @var ?DateTime $fuelWithdrawn
     */
    #[JsonProperty('fuelWithdrawn'), Date(Date::TYPE_DATE)]
    public ?DateTime $fuelWithdrawn;

    /**
     * @var ?bool $fuelReinstated
     */
    #[JsonProperty('fuelReinstated')]
    public ?bool $fuelReinstated;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $fuelAmount
     */
    #[JsonProperty('fuelAmount')]
    public ?string $fuelAmount;

    /**
     * @param array{
     *   make: string,
     *   registered: DateTime,
     *   listPrice: string,
     *   accessories: string,
     *   capitalContribution: string,
     *   privateUsePayment: string,
     *   amount: string,
     *   availableFrom?: ?DateTime,
     *   availableTo?: ?DateTime,
     *   engineSize?: ?int,
     *   fuel?: ?value-of<GbP11DItemsCreateDeclarationsResponseItemCarFuel>,
     *   co2?: ?int,
     *   zeroEmissionMileage?: ?int,
     *   noApprovedCo2?: ?bool,
     *   fuelWithdrawn?: ?DateTime,
     *   fuelReinstated?: ?bool,
     *   fuelAmount?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->make = $values['make'];
        $this->registered = $values['registered'];
        $this->availableFrom = $values['availableFrom'] ?? null;
        $this->availableTo = $values['availableTo'] ?? null;
        $this->engineSize = $values['engineSize'] ?? null;
        $this->fuel = $values['fuel'] ?? null;
        $this->co2 = $values['co2'] ?? null;
        $this->zeroEmissionMileage = $values['zeroEmissionMileage'] ?? null;
        $this->noApprovedCo2 = $values['noApprovedCo2'] ?? null;
        $this->listPrice = $values['listPrice'];
        $this->accessories = $values['accessories'];
        $this->capitalContribution = $values['capitalContribution'];
        $this->privateUsePayment = $values['privateUsePayment'];
        $this->fuelWithdrawn = $values['fuelWithdrawn'] ?? null;
        $this->fuelReinstated = $values['fuelReinstated'] ?? null;
        $this->amount = $values['amount'];
        $this->fuelAmount = $values['fuelAmount'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
