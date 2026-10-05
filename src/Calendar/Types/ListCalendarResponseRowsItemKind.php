<?php

namespace Nordlet\Calendar\Types;

enum ListCalendarResponseRowsItemKind: string
{
    case Custom = "custom";
    case Obligation = "obligation";
}
