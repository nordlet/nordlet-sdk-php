<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsConfigsListResponseRowsItemFieldsItemKind: string
{
    case Text = "text";
    case Secret = "secret";
    case Select = "select";
}
