<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsMarkDeclarationsResponseEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
