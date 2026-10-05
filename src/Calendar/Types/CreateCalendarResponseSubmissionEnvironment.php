<?php

namespace Nordlet\Calendar\Types;

enum CreateCalendarResponseSubmissionEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
