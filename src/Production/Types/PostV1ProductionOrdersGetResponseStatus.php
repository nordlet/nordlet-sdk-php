<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersGetResponseStatus: string
{
    case Draft = "draft";
    case Completed = "completed";
}
