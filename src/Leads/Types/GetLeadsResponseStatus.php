<?php

namespace Nordlet\Leads\Types;

enum GetLeadsResponseStatus: string
{
    case New_ = "new";
    case Contacted = "contacted";
    case Qualified = "qualified";
    case Lost = "lost";
    case Converted = "converted";
}
