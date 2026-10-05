<?php

namespace Nordlet\Calendar\Types;

enum GetCalendarResponseSubmissionEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
