<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PlZusDraKeduDeclarationsResponseInsuredItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $firstName
     */
    #[JsonProperty('firstName')]
    public string $firstName;

    /**
     * @var string $lastName
     */
    #[JsonProperty('lastName')]
    public string $lastName;

    /**
     * @var string $pesel
     */
    #[JsonProperty('pesel')]
    public string $pesel;

    /**
     * @var PlZusDraKeduDeclarationsResponseInsuredItemKodTytulu $kodTytulu
     */
    #[JsonProperty('kodTytulu')]
    public PlZusDraKeduDeclarationsResponseInsuredItemKodTytulu $kodTytulu;

    /**
     * @var string $pensionBase
     */
    #[JsonProperty('pensionBase')]
    public string $pensionBase;

    /**
     * @var string $healthBase
     */
    #[JsonProperty('healthBase')]
    public string $healthBase;

    /**
     * @param array{
     *   employeeId: string,
     *   firstName: string,
     *   lastName: string,
     *   pesel: string,
     *   kodTytulu: PlZusDraKeduDeclarationsResponseInsuredItemKodTytulu,
     *   pensionBase: string,
     *   healthBase: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
        $this->pesel = $values['pesel'];
        $this->kodTytulu = $values['kodTytulu'];
        $this->pensionBase = $values['pensionBase'];
        $this->healthBase = $values['healthBase'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
