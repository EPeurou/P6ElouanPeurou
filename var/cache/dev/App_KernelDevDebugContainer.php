<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container12HZHgC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container12HZHgC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container12HZHgC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container12HZHgC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container12HZHgC\App_KernelDevDebugContainer([
    'container.build_hash' => '12HZHgC',
    'container.build_id' => '8fa5a46f',
    'container.build_time' => 1637751191,
], __DIR__.\DIRECTORY_SEPARATOR.'Container12HZHgC');
