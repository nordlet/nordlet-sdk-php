<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersCompleteResponseStatus: string
{
    case Draft = "draft";
    case Completed = "completed";
}
