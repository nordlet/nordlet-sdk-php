<?php

namespace Nordlet\Consolidation\Types;

enum MembersAddConsolidationResponseMethod: string
{
    case Full = "full";
    case Proportional = "proportional";
    case Equity = "equity";
}
