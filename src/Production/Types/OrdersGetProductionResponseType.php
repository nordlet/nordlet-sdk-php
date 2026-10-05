<?php

namespace Nordlet\Production\Types;

enum OrdersGetProductionResponseType: string
{
    case Assembly = "assembly";
    case Disassembly = "disassembly";
}
