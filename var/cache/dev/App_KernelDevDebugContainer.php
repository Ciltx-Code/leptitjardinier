<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHTlewYO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHTlewYO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHTlewYO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHTlewYO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHTlewYO\App_KernelDevDebugContainer([
    'container.build_hash' => 'HTlewYO',
    'container.build_id' => '0faeb3fa',
    'container.build_time' => 1639737301,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHTlewYO');