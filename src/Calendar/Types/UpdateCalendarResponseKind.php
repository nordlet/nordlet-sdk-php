<?php

namespace Nordlet\Calendar\Types;

enum UpdateCalendarResponseKind: string
{
    case Custom = "custom";
    case Obligation = "obligation";
}
