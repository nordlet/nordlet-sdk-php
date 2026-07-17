<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersCreateRequestType: string
{
    case Assembly = "assembly";
    case Disassembly = "disassembly";
}
