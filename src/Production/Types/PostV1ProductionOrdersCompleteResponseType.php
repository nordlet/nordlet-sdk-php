<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersCompleteResponseType: string
{
    case Assembly = "assembly";
    case Disassembly = "disassembly";
}
