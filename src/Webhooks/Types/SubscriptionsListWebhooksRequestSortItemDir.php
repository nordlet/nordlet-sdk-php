<?php

namespace Nordlet\Webhooks\Types;

enum SubscriptionsListWebhooksRequestSortItemDir: string
{
    case Asc = "asc";
    case Desc = "desc";
}
