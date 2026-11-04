<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsConfirmDeclarationsResponseEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
