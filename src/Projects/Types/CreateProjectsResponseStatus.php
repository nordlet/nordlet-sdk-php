<?php

namespace Nordlet\Projects\Types;

enum CreateProjectsResponseStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Archived = "archived";
}
