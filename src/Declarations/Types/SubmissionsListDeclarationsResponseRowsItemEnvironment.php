<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsListDeclarationsResponseRowsItemEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
