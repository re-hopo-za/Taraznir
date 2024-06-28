@props([
    'label'    => null,
    'hasMeter' => false,
    'confirm'  => false,
    'class'    => 'mb-8'
])

@if($hasMeter)
    <div class="fv-row {{$class}}" data-kt-password-meter="true">
        <div class="mb-1">
            <div class="position-relative mb-3">
                <div class="input-group mb-5">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="ki-outline ki-password-check fs-1"></i>
                    </span>
                    <input wire:model="password" class="form-control bg-transparent" type="password" placeholder="@lang($label)" name="password" autocomplete="new-password" dir="ltr" style="text-align: right"/>
                </div>
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility" style="z-index: 10">
                    <i class="ki-outline ki-eye-slash fs-2"></i>
                    <i class="ki-outline ki-eye fs-2 d-none"></i>
                </span>
            </div>
            <div  wire:ignore class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
        </div>
        <x-theme::error key="password" />
    </div>
@elseif($confirm)
    <div class="position-relative {{$class}}" data-kt-password-meter="true">
        <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">
                <i class="ki-outline ki-password-check fs-1"></i>
            </span>
            <input wire:model="password_confirmation" class="form-control bg-transparent" type="password" placeholder="@lang($label)" autocomplete="new-password" dir="ltr" style="text-align: right"/>
            <x-theme::error key="password_confirmation" />
        </div>
        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility" style="z-index: 10">
            <i class="ki-outline ki-eye-slash fs-2"></i>
            <i class="ki-outline ki-eye fs-2 d-none"></i>
        </span>
    </div>
@else
    <div class="fv-row {{$class}}">
        <div class="mb-1 flex-1">
            <div class="position-relative mb-3" data-kt-password-meter="true">
                <div class="input-group mb-5">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="ki-outline ki-password-check fs-1"></i>
                    </span>
                    <input wire:model="password" class="form-control bg-transparent" type="password" placeholder="@lang($label)" autocomplete="new-password" dir="ltr" style="text-align: right"/>
                    <x-theme::error key="password" />
                </div>
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility" style="z-index: 10">
                    <i class="ki-outline ki-eye-slash fs-2"></i>
                    <i class="ki-outline ki-eye fs-2 d-none"></i>
                </span>
            </div>
        </div>
    </div>
@endif
