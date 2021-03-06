<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Chart extends Component
{
    /**
     * @var array
     */
    private array $data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.chart', ['data' => $this->data]);
    }
}
