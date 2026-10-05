<?php

namespace Nordlet\Audit\Types;

enum ListAuditResponseRowsItemActorType: string
{
    case User = "user";
    case ApiKey = "api_key";
    case System = "system";
}
