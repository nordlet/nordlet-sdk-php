<?php

namespace Nordlet\Projects\Types;

enum ListProjectsResponseRowsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Archived = "archived";
}
