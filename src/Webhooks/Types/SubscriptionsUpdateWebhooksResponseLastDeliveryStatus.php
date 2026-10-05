<?php

namespace Nordlet\Webhooks\Types;

enum SubscriptionsUpdateWebhooksResponseLastDeliveryStatus: string
{
    case Pending = "pending";
    case Delivered = "delivered";
    case Failed = "failed";
}
