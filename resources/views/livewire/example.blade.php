<div>
    <h1>Working example</h1>

    <x-select
        name="choice1"
        wire:model="choice1"
        :options="$options"
    />
    I'm updated: {{ $options[$choice1] }}

    <h1>Using wire:ignore and nested x-data</h1>

    <div wire:ignore
         x-data>
        <x-select
            name="choice2"
            wire:model="choice2"
            :options="$options"
        />
        I'm not updated: {{ $options[$choice2] }}
    </div>


    <h1>Inside nested x-data</h1>

    <input type="checkbox" id="ready" wire:model="ready">
    <label for="ready">I'm ready to break things</label>
    @if($ready)
        <div x-data>
            <x-select
                name="choice3"
                wire:model="choice3"
                :options="$options"
            />
            {{ $options[$choice3] }}
        </div>
    @endif

    <h1>Results</h1>
    <ul>
        <li>1: {{ $options[$choice1] }}</li>
        <li>2: {{ $options[$choice2] }}</li>
        <li>3: {{ $options[$choice3] }}</li>
    </ul>
</div>
