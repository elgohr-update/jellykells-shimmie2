<?php

declare(strict_types=1);

class RSSCommentsInfo extends ExtensionInfo
{
    public const KEY = "rss_comments";

    public string $key = self::KEY;
    public string $name = "RSS for Comments";
    public string $url = self::SHIMMIE_URL;
    public array $authors = self::SHISH_AUTHOR;
    public string $license = self::LICENSE_GPLV2;
    public string $description = "Self explanatory";
}
