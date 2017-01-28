<?php

namespace Nimble\Component\Markdown;

use Nimble\Component\Component;
use GrahamCampbell\Markdown\MarkdownServiceProvider;

class MarkdownComponent extends Component {

    public function setUp()
    {
        $markDown = new MarkdownServiceProvider($this->app);
        $markDown->boot();
        $markDown->register();
    }

    public function name()
    {
        return 'markdown';
    }
}
