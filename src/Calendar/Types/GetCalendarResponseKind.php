<?php

namespace Nordlet\Calendar\Types;

enum GetCalendarResponseKind: string
{
    case Custom = "custom";
    case Obligation = "obligation";
}
