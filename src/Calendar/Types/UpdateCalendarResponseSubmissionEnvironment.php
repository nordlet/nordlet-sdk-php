<?php

namespace Nordlet\Calendar\Types;

enum UpdateCalendarResponseSubmissionEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
