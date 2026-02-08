<?php

use Livewire\Component;

new class extends Component
{
    public int $count = 3;

    public function increment()
    {
        $this->count++;
    }

    public function render() 
    {
        return view('components.counter');
    }
};
?>

<div>
    <h1>Count: {{ $count }}</h1>
    <button wire:click="increment">+</button>
</div>