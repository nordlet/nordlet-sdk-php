<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankFeedsAccountsConfigureRequestSyncSchedule;

class PostV1BankFeedsAccountsConfigureRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $importTemplateId
     */
    #[JsonProperty('importTemplateId')]
    public ?string $importTemplateId;

    /**
     * @var ?value-of<PostV1BankFeedsAccountsConfigureRequestSyncSchedule> $syncSchedule
     */
    #[JsonProperty('syncSchedule')]
    public ?string $syncSchedule;

    /**
     * @param array{
     *   id: string,
     *   importTemplateId?: ?string,
     *   syncSchedule?: ?value-of<PostV1BankFeedsAccountsConfigureRequestSyncSchedule>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->importTemplateId = $values['importTemplateId'] ?? null;
        $this->syncSchedule = $values['syncSchedule'] ?? null;
    }
}
