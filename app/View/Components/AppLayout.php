<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * The title of the page.
     * 
     * @var string
     */
    public $pageTitle;

    /**
     * Create a new component instance.
     * 
     * @param string $title
     * @return void
     */
    public function __construct($title)
    {
        $this->pageTitle = $title;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
