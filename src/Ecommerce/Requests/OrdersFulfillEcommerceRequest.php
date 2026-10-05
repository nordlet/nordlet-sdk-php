<?php

namespace Nordlet\Ecommerce\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class OrdersFulfillEcommerceRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @var ?string $cogsAccountCode
     */
    #[JsonProperty('cogsAccountCode')]
    public ?string $cogsAccountCode;

    /**
     * @var ?string $inventoryAccountCode
     */
    #[JsonProperty('inventoryAccountCode')]
    public ?string $inventoryAccountCode;

    /**
     * @param array{
     *   id: string,
     *   date?: ?DateTime,
     *   cogsAccountCode?: ?string,
     *   inventoryAccountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->date = $values['date'] ?? null;
        $this->cogsAccountCode = $values['cogsAccountCode'] ?? null;
        $this->inventoryAccountCode = $values['inventoryAccountCode'] ?? null;
    }
}
