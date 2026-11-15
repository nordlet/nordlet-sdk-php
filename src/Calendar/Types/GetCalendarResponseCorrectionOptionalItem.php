<?php

namespace Nordlet\Calendar\Types;

enum GetCalendarResponseCorrectionOptionalItem: string
{
    case Reason = "reason";
    case ReasonCode = "reasonCode";
    case AuthorityReference = "authorityReference";
    case DiscoveredOn = "discoveredOn";
}
