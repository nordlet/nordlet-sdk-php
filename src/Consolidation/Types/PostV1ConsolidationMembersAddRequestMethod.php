<?php

namespace Nordlet\Consolidation\Types;

enum PostV1ConsolidationMembersAddRequestMethod: string
{
    case Full = "full";
    case Proportional = "proportional";
    case Equity = "equity";
}
