<?php

namespace Modules\Theme\app\Livewire\Forms;


use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Modules\Core\app\Models\FormEntry;
use Modules\Core\app\Models\FormEntryMeta;

class ContactForm extends Component
{
    use LivewireAlert;

    public string|null
        $name,
        $email,
        $mobile,
        $subject,
        $message;

    protected array $rules = [
        'name'      => 'nullable|max:30',
        'email'     => 'required|email',
        'subject'   => 'nullable|max:100',
        'message'   => 'required|min:15',
        'mobile'    => 'nullable',
    ];

    public function submit(): void
    {
        $validated = $this->validate();

        $model = FormEntry::create([
            'form_id' => 'contact',
            'user_id' => Auth::id()
        ]);

        foreach ($validated as $key => $val)
            FormEntryMeta::create([
                'form_id' => $model->id,
                'key'     => $key,
                'value'   => $val
            ]);

        $this->reset();
        $this->alert('success' ,__('theme::theme.alert.successfully_stored'), [
            'position'         => 'top-end',
            'timer'            => 10000,
            'toast'            => true,
            'timerProgressBar' => true,
        ]);
    }

    public function render(): View
    {
        return view('theme::forms.contact-form');
    }
}
