<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersCreateResponseType: string
{
    case Assembly = "assembly";
    case Disassembly = "disassembly";
}
