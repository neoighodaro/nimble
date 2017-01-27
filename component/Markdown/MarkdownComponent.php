<?php

namespace Nimble\Component\Markdown;

use Nimble\Component\Component;
use GrahamCampbell\Markdown\MarkdownServiceProvider;

class MarkdownComponent extends Component{

  public function setUp(){
    //the would set up markdown component to start working
    $markDown = new MarkdownServiceProvider($this->app);
    //booting the markdown class
    $markDown->boot();

    $markDown->register();

  }

}
