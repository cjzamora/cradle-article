<?php // -->

$this->on('module-cradle-article-install', function ($request, $response) {
    print 'Root article install event was triggered.' . PHP_EOL;
});

$this->on('cjzamora-cradle-article-install', function ($request, $response) {
    print 'Vendor article install event was triggered.' . PHP_EOL;
});

$this->on('module-cradle-article-update', function ($request, $response) {
    print 'Root article update event was triggered.' . PHP_EOL;
});

$this->on('cjzamora-cradle-article-update', function ($request, $response) {
    print 'Vendor article update event was triggered.' . PHP_EOL;
});

$this->on('module-cradle-article-remove', function ($request, $response) {
    print 'Root article remove event was triggered.' . PHP_EOL;
});

$this->on('cjzamora-cradle-article-remove', function ($request, $response) {
    print 'Vendor article remove event was triggered.' . PHP_EOL;
});