<?php

namespace Nordlet\Webhooks\Types;

enum DeliveriesListWebhooksRequestSortItemDir: string
{
    case Asc = "asc";
    case Desc = "desc";
}
