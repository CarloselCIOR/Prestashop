<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3tzn9di\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3tzn9di/appProdProjectContainer.php') {
    touch(__DIR__.'/Container3tzn9di.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container3tzn9di\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container3tzn9di\appProdProjectContainer([
    'container.build_hash' => '3tzn9di',
    'container.build_id' => 'fe9d8570',
    'container.build_time' => 1559409538,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3tzn9di');