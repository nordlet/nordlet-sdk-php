<?php

namespace Nordlet\Production\Types;

enum OrdersCompleteProductionResponseType: string
{
    case Assembly = "assembly";
    case Disassembly = "disassembly";
}
