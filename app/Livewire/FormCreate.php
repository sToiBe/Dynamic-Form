<?php

namespace App\Livewire;

use App\Models\Template;
use Livewire\Component;

class FormCreate extends Component
{
    // Template mean every row added into array
    public $templates = [];
    public $all_templates;
    public $questions = [''];

    public $designTemplate = 'tailwind';
    public $saved = FALSE;

    public function mount()
    {
        $this->all_templates = Template::all();
    }
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.form-create');
    }
}
