<?php

namespace Nordlet\Projects\Types;

enum PostV1ProjectsCreateResponseStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Archived = "archived";
}
