<?php

namespace Nordlet\Production\Types;

enum OrdersCompleteProductionResponseStatus: string
{
    case Draft = "draft";
    case Completed = "completed";
}
