<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsCreateDeclarationsResponseEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
