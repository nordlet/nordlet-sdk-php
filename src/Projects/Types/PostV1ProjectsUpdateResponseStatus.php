<?php

namespace Nordlet\Projects\Types;

enum PostV1ProjectsUpdateResponseStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Archived = "archived";
}
