<?php

namespace Nordlet\Projects\Types;

enum PostV1ProjectsReportResponseRowsItemStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Archived = "archived";
}
