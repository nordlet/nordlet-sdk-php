<?php

namespace Nordlet\Production\Types;

enum OrdersCreateProductionResponseType: string
{
    case Assembly = "assembly";
    case Disassembly = "disassembly";
}
