<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCgm56wx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCgm56wx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCgm56wx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCgm56wx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCgm56wx\App_KernelDevDebugContainer([
    'container.build_hash' => 'Cgm56wx',
    'container.build_id' => 'dfc40da6',
    'container.build_time' => 1693336949,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCgm56wx');
