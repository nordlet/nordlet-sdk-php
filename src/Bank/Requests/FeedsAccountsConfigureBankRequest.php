<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\FeedsAccountsConfigureBankRequestSyncSchedule;

class FeedsAccountsConfigureBankRequest extends JsonSerializableType
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
     * @var ?value-of<FeedsAccountsConfigureBankRequestSyncSchedule> $syncSchedule
     */
    #[JsonProperty('syncSchedule')]
    public ?string $syncSchedule;

    /**
     * @param array{
     *   id: string,
     *   importTemplateId?: ?string,
     *   syncSchedule?: ?value-of<FeedsAccountsConfigureBankRequestSyncSchedule>,
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
