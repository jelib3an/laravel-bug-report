<div>
  <div>
    Name: {{ $this->employee->name }}
  </div>
  <div>
    <input type="text" wire:model="employee.name" />
    @error('employee.name')
      <div>{{ $message }}</div>
    @enderror
  </div>
  <div>
    <button wire:click="$set('employee.name', 'John Doe')">Set Name</button>
  </div>
</div>
