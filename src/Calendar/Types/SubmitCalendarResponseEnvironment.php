<?php

namespace Nordlet\Calendar\Types;

enum SubmitCalendarResponseEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
