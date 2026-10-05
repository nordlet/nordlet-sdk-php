<?php

namespace Nordlet\Projects\Types;

enum UpdateProjectsResponseStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Archived = "archived";
}
