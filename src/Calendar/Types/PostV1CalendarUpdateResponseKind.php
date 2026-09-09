<?php

namespace Nordlet\Calendar\Types;

enum PostV1CalendarUpdateResponseKind: string
{
    case Custom = "custom";
    case Obligation = "obligation";
}
