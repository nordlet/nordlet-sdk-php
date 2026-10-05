<?php

namespace Nordlet\Calendar\Types;

enum CreateCalendarResponseSubmissionsItemEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
