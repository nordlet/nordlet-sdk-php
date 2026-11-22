<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\GbP11DItemsCreateDeclarationsRequestItem;

class GbP11DItemsCreateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var int $taxYear
     */
    #[JsonProperty('taxYear')]
    public int $taxYear;

    /**
     * @var GbP11DItemsCreateDeclarationsRequestItem $item
     */
    #[JsonProperty('item')]
    public GbP11DItemsCreateDeclarationsRequestItem $item;

    /**
     * @param array{
     *   employeeId: string,
     *   taxYear: int,
     *   item: GbP11DItemsCreateDeclarationsRequestItem,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->taxYear = $values['taxYear'];
        $this->item = $values['item'];
    }
}
