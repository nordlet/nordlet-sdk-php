<?php

namespace Nordlet\Leads\Types;

enum UpdateLeadsRequestStatus: string
{
    case New_ = "new";
    case Contacted = "contacted";
    case Qualified = "qualified";
    case Lost = "lost";
}
