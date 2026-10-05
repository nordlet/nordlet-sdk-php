<?php

namespace Nordlet\Production\Types;

enum OrdersCreateProductionRequestType: string
{
    case Assembly = "assembly";
    case Disassembly = "disassembly";
}
