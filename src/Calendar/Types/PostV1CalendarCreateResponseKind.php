<?php

namespace Nordlet\Calendar\Types;

enum PostV1CalendarCreateResponseKind: string
{
    case Custom = "custom";
    case Obligation = "obligation";
}
