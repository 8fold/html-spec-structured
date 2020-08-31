<?php
declare(strict_types=1);

namespace Eightfold\HtmlSpecStructured\Write\Interfaces;

use Eightfold\HtmlSpecStructured\Write\Interfaces\HtmlComponent;

interface ComponentWriter
{
    static public function fromPath(string $path): ComponentWriter;

    static public function fromObject(object $attribute): ComponentWriter;

    public function __construct(object $attribute);
}
