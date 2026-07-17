<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersListResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Completed = "completed";
}
