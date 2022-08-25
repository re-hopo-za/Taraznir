<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        به‌ روز رسانی گذرواژه
    </x-slot>

    <x-slot name="description">
        اطمینان حاصل کنید که اکانت شما با یک گذرواژه طولانی و تصادفی استفاده می‌کند.
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="گذرواژه فعلی" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="گذرواژه جدید" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value=" تکرار گذرواژه جدید" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            ذخیره شد.
        </x-jet-action-message>

        <x-jet-button>
            ذخیره
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
