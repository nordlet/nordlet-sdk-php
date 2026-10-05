<?php

namespace Nordlet\Production\Types;

enum OrdersListProductionResponseRowsItemType: string
{
    case Assembly = "assembly";
    case Disassembly = "disassembly";
}
