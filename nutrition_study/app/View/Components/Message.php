<?php

namespace App\View\Components;

<<<<<<< HEAD
=======
use Closure;
use Illuminate\Contracts\View\View;
>>>>>>> haruya
use Illuminate\View\Component;

class Message extends Component
{
<<<<<<< HEAD
  /**
   * Create a new component instance.
   *
   * @return void
   */


  public $message;
  public function __construct($message)
  {
    $this->message = $message;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.message');
  }
=======
    /**
     * Create a new component instance.
     */
    public $message;
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message');
    }
>>>>>>> haruya
}
