<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTBnhSnm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTBnhSnm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTBnhSnm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTBnhSnm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTBnhSnm\App_KernelDevDebugContainer([
    'container.build_hash' => 'TBnhSnm',
    'container.build_id' => '814c2272',
    'container.build_time' => 1635947700,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTBnhSnm');
