<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWGRcQA0\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWGRcQA0/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWGRcQA0.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWGRcQA0\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWGRcQA0\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'WGRcQA0',
    'container.build_id' => 'c9cb5069',
    'container.build_time' => 1548328975,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerWGRcQA0');