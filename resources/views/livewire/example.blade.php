<div>
  <div>
    Property: {{ $property }}
  </div>
  <div>
    <input type="text" wire:model="property" />
  </div>
  <div>
    <button wire:click="$set('property', 'Some Value')">Set Property</button>
  </div>
</div>
