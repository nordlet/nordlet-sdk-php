<?php

namespace Nordlet\Calendar\Types;

enum PostV1CalendarListResponseRowsItemKind: string
{
    case Custom = "custom";
    case Obligation = "obligation";
}
