<?php

namespace Nordlet\Calendar\Types;

enum UpdateCalendarResponseCorrectionOptionalItem: string
{
    case Reason = "reason";
    case ReasonCode = "reasonCode";
    case AuthorityReference = "authorityReference";
    case DiscoveredOn = "discoveredOn";
}
