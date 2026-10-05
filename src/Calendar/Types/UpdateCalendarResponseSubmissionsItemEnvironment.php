<?php

namespace Nordlet\Calendar\Types;

enum UpdateCalendarResponseSubmissionsItemEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
