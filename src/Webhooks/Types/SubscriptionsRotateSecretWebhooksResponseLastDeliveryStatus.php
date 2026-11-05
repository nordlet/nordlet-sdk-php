<?php

namespace Nordlet\Webhooks\Types;

enum SubscriptionsRotateSecretWebhooksResponseLastDeliveryStatus: string
{
    case Pending = "pending";
    case Delivered = "delivered";
    case Failed = "failed";
}
