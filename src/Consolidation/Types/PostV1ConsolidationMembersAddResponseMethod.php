<?php

namespace Nordlet\Consolidation\Types;

enum PostV1ConsolidationMembersAddResponseMethod: string
{
    case Full = "full";
    case Proportional = "proportional";
    case Equity = "equity";
}
