<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUQv0Z79\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUQv0Z79/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUQv0Z79.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUQv0Z79\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUQv0Z79\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'UQv0Z79',
    'container.build_id' => 'a1901510',
    'container.build_time' => 1551360992,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerUQv0Z79');
