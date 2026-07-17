<?php

namespace Nordlet\Webhooks\Types;

enum PostV1WebhooksDeliveriesListResponseRowsItemStatus: string
{
    case Pending = "pending";
    case Delivered = "delivered";
    case Failed = "failed";
}
