<?php

namespace Nordlet\Production\Types;

enum OrdersCreateProductionResponseStatus: string
{
    case Draft = "draft";
    case Completed = "completed";
}
