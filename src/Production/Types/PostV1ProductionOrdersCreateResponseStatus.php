<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersCreateResponseStatus: string
{
    case Draft = "draft";
    case Completed = "completed";
}
