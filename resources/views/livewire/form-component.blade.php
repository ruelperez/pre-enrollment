<div>
    <div>
        <label for="name">Name:</label>
        <input type="text" wire:model="name" id="name">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" wire:model="email" id="email">
    </div>

    <div>
        <button type="button" wire:click="generate()">Save as PDF</button>
    </div>

</div>

