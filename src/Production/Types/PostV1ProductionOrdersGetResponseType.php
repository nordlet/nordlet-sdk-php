<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersGetResponseType: string
{
    case Assembly = "assembly";
    case Disassembly = "disassembly";
}
