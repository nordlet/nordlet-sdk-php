<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\PostV1ProductionQualityChecksRecordRequestResult;

class PostV1ProductionQualityChecksRecordRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1ProductionQualityChecksRecordRequestResult> $result
     */
    #[JsonProperty('result')]
    public string $result;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   id: string,
     *   result: value-of<PostV1ProductionQualityChecksRecordRequestResult>,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->result = $values['result'];
        $this->notes = $values['notes'] ?? null;
    }
}
