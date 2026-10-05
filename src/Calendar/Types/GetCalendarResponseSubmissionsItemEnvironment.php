<?php

namespace Nordlet\Calendar\Types;

enum GetCalendarResponseSubmissionsItemEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
