<?php

namespace Nordlet\Webhooks\Types;

enum PostV1WebhooksSubscriptionsListRequestSortItemDir: string
{
    case Asc = "asc";
    case Desc = "desc";
}
