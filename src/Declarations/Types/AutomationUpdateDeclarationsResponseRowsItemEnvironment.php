<?php

namespace Nordlet\Declarations\Types;

enum AutomationUpdateDeclarationsResponseRowsItemEnvironment: string
{
    case Test = "test";
    case Production = "production";
}
