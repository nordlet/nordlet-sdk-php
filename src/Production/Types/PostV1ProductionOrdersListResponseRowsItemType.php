<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersListResponseRowsItemType: string
{
    case Assembly = "assembly";
    case Disassembly = "disassembly";
}
