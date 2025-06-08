<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MessageBanner extends Component
{
    public $msg;
    public $myTxt;
    /**
     * Create a new component instance.
     */
    public function __construct($msg, $myTxt)
    {
        $this->msg = $msg;
        $this->myTxt = $myTxt;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message-banner');
    }
}
