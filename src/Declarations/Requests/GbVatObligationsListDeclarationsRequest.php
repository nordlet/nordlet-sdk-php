<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\GbVatObligationsListDeclarationsRequestDevice;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Declarations\Types\GbVatObligationsListDeclarationsRequestStatus;

class GbVatObligationsListDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var GbVatObligationsListDeclarationsRequestDevice $device Facts of the browser the user files from, which HMRC requires with every VAT (MTD) API call: `navigator.userAgent`, a UUID the browser keeps for the device, every screen (width, height, scaling factor, colour depth in bits), the window size in pixels and the time zone as `UTC±hh:mm`.
     */
    #[JsonProperty('device')]
    public GbVatObligationsListDeclarationsRequestDevice $device;

    /**
     * @var ?DateTime $from
     */
    #[JsonProperty('from'), Date(Date::TYPE_DATE)]
    public ?DateTime $from;

    /**
     * @var ?DateTime $to
     */
    #[JsonProperty('to'), Date(Date::TYPE_DATE)]
    public ?DateTime $to;

    /**
     * @var ?value-of<GbVatObligationsListDeclarationsRequestStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @param array{
     *   device: GbVatObligationsListDeclarationsRequestDevice,
     *   from?: ?DateTime,
     *   to?: ?DateTime,
     *   status?: ?value-of<GbVatObligationsListDeclarationsRequestStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->device = $values['device'];
        $this->from = $values['from'] ?? null;
        $this->to = $values['to'] ?? null;
        $this->status = $values['status'] ?? null;
    }
}
