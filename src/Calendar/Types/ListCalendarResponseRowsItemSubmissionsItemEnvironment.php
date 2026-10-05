<?php

namespace Nordlet\Calendar\Types;

enum ListCalendarResponseRowsItemSubmissionsItemEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
