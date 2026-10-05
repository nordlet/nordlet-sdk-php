<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\SubmissionsMarkDeclarationsRequestStatus;

class SubmissionsMarkDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<SubmissionsMarkDeclarationsRequestStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $externalRef
     */
    #[JsonProperty('externalRef')]
    public ?string $externalRef;

    /**
     * @var ?string $message
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @param array{
     *   id: string,
     *   status: value-of<SubmissionsMarkDeclarationsRequestStatus>,
     *   externalRef?: ?string,
     *   message?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->status = $values['status'];
        $this->externalRef = $values['externalRef'] ?? null;
        $this->message = $values['message'] ?? null;
    }
}
