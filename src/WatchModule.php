<?php

namespace Bluora\PhpElixirWatch;

use Bluora\PhpElixir\AbstractModule;

class WatchModule extends AbstractModule
{
    /**
     * Verify the configuration for this task.
     *
     * @param mixed $path
     *
     * @return bool
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public static function verify($index, $path)
    {
        return ElixirWatchCommand::checkPath($path, false, true);
    }
}
