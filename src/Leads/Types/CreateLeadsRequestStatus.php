<?php

namespace Nordlet\Leads\Types;

enum CreateLeadsRequestStatus: string
{
    case New_ = "new";
    case Contacted = "contacted";
    case Qualified = "qualified";
    case Lost = "lost";
}
