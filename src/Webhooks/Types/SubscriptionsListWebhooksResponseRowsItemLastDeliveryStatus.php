<?php

namespace Nordlet\Webhooks\Types;

enum SubscriptionsListWebhooksResponseRowsItemLastDeliveryStatus: string
{
    case Pending = "pending";
    case Delivered = "delivered";
    case Failed = "failed";
}
