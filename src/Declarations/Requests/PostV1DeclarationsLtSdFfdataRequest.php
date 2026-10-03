<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\PostV1DeclarationsLtSdFfdataRequestType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtSdFfdataRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostV1DeclarationsLtSdFfdataRequestType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

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
     *   type: value-of<PostV1DeclarationsLtSdFfdataRequestType>,
     *   fromDate: string,
     *   toDate: string,
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
