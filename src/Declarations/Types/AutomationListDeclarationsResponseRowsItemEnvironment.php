<?php

namespace Nordlet\Declarations\Types;

enum AutomationListDeclarationsResponseRowsItemEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
