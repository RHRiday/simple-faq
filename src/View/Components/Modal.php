<?php

namespace Rifat\SimpleFaq\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id, $name, $action, $status, $cid1, $cid2, $cid3, $cid4, $cid5;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $action, $status=null, $cid1 = null, $cid2 = null, $cid3 = null, $cid4 = null, $cid5 = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->action = $action;
        $this->status = $status;
        $this->cid1 = $cid1;
        $this->cid2 = $cid2;
        $this->cid3 = $cid3;
        $this->cid4 = $cid4;
        $this->cid5 = $cid5;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('faq::components.modal');
    }
}
