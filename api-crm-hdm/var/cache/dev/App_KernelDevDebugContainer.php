<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container55iDE9O\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container55iDE9O/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container55iDE9O.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container55iDE9O\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container55iDE9O\App_KernelDevDebugContainer([
    'container.build_hash' => '55iDE9O',
    'container.build_id' => '06bfa83d',
    'container.build_time' => 1689942654,
], __DIR__.\DIRECTORY_SEPARATOR.'Container55iDE9O');
