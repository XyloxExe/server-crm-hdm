<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFC0Zlp2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFC0Zlp2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFC0Zlp2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFC0Zlp2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFC0Zlp2\App_KernelDevDebugContainer([
    'container.build_hash' => 'FC0Zlp2',
    'container.build_id' => '0b7014e3',
    'container.build_time' => 1690896674,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFC0Zlp2');
