<?php

namespace Nordlet\Calendar\Types;

enum ListCalendarResponseRowsItemSubmissionEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
