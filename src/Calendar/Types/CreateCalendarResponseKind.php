<?php

namespace Nordlet\Calendar\Types;

enum CreateCalendarResponseKind: string
{
    case Custom = "custom";
    case Obligation = "obligation";
}
