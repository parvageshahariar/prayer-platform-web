<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OrganizationCard extends Component
{
    public $name;
    public $description;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data->name;
        $this->description = $data->description;
        $this->id = $data->id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.organization-card');
    }
}
