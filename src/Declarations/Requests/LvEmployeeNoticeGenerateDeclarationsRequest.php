<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\LvEmployeeNoticeGenerateDeclarationsRequestEvent;
use Nordlet\Declarations\Types\LvEmployeeNoticeGenerateDeclarationsRequestEndCode;

class LvEmployeeNoticeGenerateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $contractId
     */
    #[JsonProperty('contractId')]
    public string $contractId;

    /**
     * @var value-of<LvEmployeeNoticeGenerateDeclarationsRequestEvent> $event
     */
    #[JsonProperty('event')]
    public string $event;

    /**
     * @var ?value-of<LvEmployeeNoticeGenerateDeclarationsRequestEndCode> $endCode
     */
    #[JsonProperty('endCode')]
    public ?string $endCode;

    /**
     * @param array{
     *   contractId: string,
     *   event: value-of<LvEmployeeNoticeGenerateDeclarationsRequestEvent>,
     *   endCode?: ?value-of<LvEmployeeNoticeGenerateDeclarationsRequestEndCode>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contractId = $values['contractId'];
        $this->event = $values['event'];
        $this->endCode = $values['endCode'] ?? null;
    }
}
