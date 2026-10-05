<?php

namespace Nordlet\Production\Types;

enum OrdersGetProductionResponseStatus: string
{
    case Draft = "draft";
    case Completed = "completed";
}
