<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsTrialBalanceResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $accountId
     */
    #[JsonProperty('accountId')]
    public string $accountId;

    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<PostV1ReportsTrialBalanceResponseRowsItemType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $opening
     */
    #[JsonProperty('opening')]
    public string $opening;

    /**
     * @var string $debit
     */
    #[JsonProperty('debit')]
    public string $debit;

    /**
     * @var string $credit
     */
    #[JsonProperty('credit')]
    public string $credit;

    /**
     * @var string $closing
     */
    #[JsonProperty('closing')]
    public string $closing;

    /**
     * @param array{
     *   accountId: string,
     *   code: string,
     *   name: string,
     *   type: value-of<PostV1ReportsTrialBalanceResponseRowsItemType>,
     *   opening: string,
     *   debit: string,
     *   credit: string,
     *   closing: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accountId = $values['accountId'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->type = $values['type'];
        $this->opening = $values['opening'];
        $this->debit = $values['debit'];
        $this->credit = $values['credit'];
        $this->closing = $values['closing'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
