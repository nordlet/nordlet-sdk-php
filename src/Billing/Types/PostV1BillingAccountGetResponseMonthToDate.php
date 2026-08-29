<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BillingAccountGetResponseMonthToDate extends JsonSerializableType
{
    /**
     * @var string $from
     */
    #[JsonProperty('from')]
    public string $from;

    /**
     * @var string $to
     */
    #[JsonProperty('to')]
    public string $to;

    /**
     * @var int $apiRequests
     */
    #[JsonProperty('apiRequests')]
    public int $apiRequests;

    /**
     * @var int $ocrPages
     */
    #[JsonProperty('ocrPages')]
    public int $ocrPages;

    /**
     * @var float $fileBytes
     */
    #[JsonProperty('fileBytes')]
    public float $fileBytes;

    /**
     * @var float $databaseBytes
     */
    #[JsonProperty('databaseBytes')]
    public float $databaseBytes;

    /**
     * @var int $archivedCompanies
     */
    #[JsonProperty('archivedCompanies')]
    public int $archivedCompanies;

    /**
     * @var int $estimatedTodayCents
     */
    #[JsonProperty('estimatedTodayCents')]
    public int $estimatedTodayCents;

    /**
     * @param array{
     *   from: string,
     *   to: string,
     *   apiRequests: int,
     *   ocrPages: int,
     *   fileBytes: float,
     *   databaseBytes: float,
     *   archivedCompanies: int,
     *   estimatedTodayCents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->apiRequests = $values['apiRequests'];
        $this->ocrPages = $values['ocrPages'];
        $this->fileBytes = $values['fileBytes'];
        $this->databaseBytes = $values['databaseBytes'];
        $this->archivedCompanies = $values['archivedCompanies'];
        $this->estimatedTodayCents = $values['estimatedTodayCents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
