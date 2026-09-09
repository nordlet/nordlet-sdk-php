<?php

namespace Nordlet\Calendar\Types;

enum PostV1CalendarGetResponseKind: string
{
    case Custom = "custom";
    case Obligation = "obligation";
}
