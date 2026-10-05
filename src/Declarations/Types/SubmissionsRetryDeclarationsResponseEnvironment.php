<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsRetryDeclarationsResponseEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
