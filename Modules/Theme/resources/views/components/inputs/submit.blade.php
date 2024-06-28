@props([
    'form_id' => null,
    'type'    => null,
    'label'   => null
])

@if($type === 'auth')
    <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
            <span wire:loading.remove class="indicator-label">
                @lang($label)
            </span>
            <span wire:loading class="indicator-progress">
                @lang('core::global.Please wait...')
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
@else
    <button
        type="submit"
        class="btn btn-primary"
    >
        @lang('core::global.Save')
    </button>
@endif
