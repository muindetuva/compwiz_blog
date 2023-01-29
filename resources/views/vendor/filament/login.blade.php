<form wire:submit.prevent="authenticate" class="space-y-8">
    {{ $this->form }}

    <x-filament::button type="submit" form="authenticate" class="w-full">
        {{ __('filament::login.buttons.submit.label') }}
    </x-filament::button>
    <p class="text-center">
        Don't have an account? <a href="/register" class="primary">Register</a>
    </p>
</form>
