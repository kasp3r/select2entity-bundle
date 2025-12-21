<?php

namespace Tetranz\Select2EntityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TetranzSelect2EntityBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
