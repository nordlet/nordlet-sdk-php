<?php

namespace Nordlet\Projects\Types;

enum PostV1ProjectsListResponseRowsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Archived = "archived";
}
