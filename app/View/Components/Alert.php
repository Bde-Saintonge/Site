<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    public $elements = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($errors, $success)
    {
        // dd($errors, $success);
        $this->setErrorElements($errors);
        $this->setSuccessElements($success);
    }


    private function setErrorElements($errors): void
    {
        if (is_null($errors)) {
            array_push($this->elements, null);
            return;
        }

        foreach ($errors as $msg) {
            array_push($this->elements, ['type' => 'error', 'message' => $msg]);
        }
    }
    private function setSuccessElements($success): void
    {
        if (is_null($success)) {
            array_push($this->elements, null);
            return;
        }
        foreach ($success as $value) {
            array_push($this->elements, ['type' => 'success', 'message' => $value]);
        }
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->elements);
        if (!is_null($this->elements[0]) || !is_null($this->elements[1]))
            return view('components.alert', $this->elements);
    }
}
