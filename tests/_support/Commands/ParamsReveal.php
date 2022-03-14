<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Support\Commands;

use CodeIgniter\CLI\BaseCommand;

class ParamsReveal extends BaseCommand
{
    public static $args;
    protected $group       = 'demo';
    protected $name        = 'reveal';
    protected $usage       = 'reveal [options] [arguments]';
    protected $description = 'Reveal params';

    public function run(array $params)
    {
        static::$args = $params;
    }
}