<?php

namespace Nordlet\Webhooks\Types;

enum SubscriptionsCreateWebhooksResponseLastDeliveryStatus: string
{
    case Pending = "pending";
    case Delivered = "delivered";
    case Failed = "failed";
}
