
<x-jet-action-section>
    <x-slot name="title">
        {{ __('Get your data') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Get all the data of an user.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Click on the button underneath to get all your information about you that we collected so far!') }}
        </div>

        <div class="mt-5">
            <x-jet-button wire:click="userCSV" >
                {{ __('Start Download') }}
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-action-section>
