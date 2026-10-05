<?php

namespace Nordlet\Webhooks\Types;

enum DeliveriesListWebhooksResponseRowsItemStatus: string
{
    case Pending = "pending";
    case Delivered = "delivered";
    case Failed = "failed";
}
