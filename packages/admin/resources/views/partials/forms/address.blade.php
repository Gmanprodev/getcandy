<div class="space-y-4">
  <div class="grid grid-cols-2 gap-4">
    <x-hub::input.group :label="__('adminhub::inputs.firstname')" :error="$errors->first($bind.'.first_name')" for="first_name" required>
      <x-hub::input.text wire:model="{{ $bind }}.first_name" id="first_name" required/>
    </x-hub::input.group>

    <x-hub::input.group :label="__('adminhub::inputs.lastname')" :error="$errors->first($bind.'.last_name')" for="last_name">
      <x-hub::input.text wire:model="{{ $bind }}.last_name" id="last_name" />
    </x-hub::input.group>
  </div>

  <x-hub::input.group :label="__('adminhub::inputs.company_name.label')" :error="$errors->first($bind.'.company_name')" for="company_name">
    <x-hub::input.text wire:model="{{ $bind }}.company_name" id="company_name" />
  </x-hub::input.group>

  <div class="grid grid-cols-2 gap-4">
    <x-hub::input.group :label="__('adminhub::inputs.phone.label')" :error="$errors->first($bind.'.contact_phone')" for="contact_phone">
      <x-hub::input.text wire:model="{{ $bind }}.contact_phone" id="contact_phone" />
    </x-hub::input.group>

    <x-hub::input.group :label="__('adminhub::inputs.email')" :error="$errors->first($bind.'.contact_email')" for="contact_email" required>
      <x-hub::input.text wire:model="{{ $bind }}.contact_email" type="email" id="contact_email" required/>
    </x-hub::input.group>
  </div>

  <x-hub::input.group :label="__('adminhub::inputs.address_line_one.label')" :error="$errors->first($bind.'.line_one')" for="line_one" required>
    <x-hub::input.text wire:model="{{ $bind }}.line_one" id="line_one" required/>
  </x-hub::input.group>

  <div class="grid grid-cols-2 gap-4">
    <x-hub::input.group :label="__('adminhub::inputs.address_line_two.label')" :error="$errors->first($bind.'.line_two')" for="line_two">
      <x-hub::input.text wire:model="{{ $bind }}.line_two" id="line_two" />
    </x-hub::input.group>

    <x-hub::input.group :label="__('adminhub::inputs.address_line_three.label')" :error="$errors->first($bind.'.line_three')" for="line_three">
      <x-hub::input.text wire:model="{{ $bind }}.line_three" id="line_three" />
    </x-hub::input.group>
  </div>

  <div class="grid grid-cols-3 gap-4">
    <x-hub::input.group :label="__('adminhub::inputs.city.label')" :error="$errors->first($bind.'.city')" for="city" required>
      <x-hub::input.text wire:model="{{ $bind }}.city" id="city" required/>
    </x-hub::input.group>

    <x-hub::input.group :label="__('adminhub::inputs.state.label')" :error="$errors->first($bind.'.state')" for="state">
      @if($states->count())
        <x-hub::input.select wire:model="{{ $bind }}.state" id="state">
          <option value>Select a state</option>
          @foreach($states as $state)
            <option value="{{ $state->name }}">{{ $state->name }}</option>
          @endforeach
        </x-hub::input.select>
      @else
        <x-hub::input.text wire:model="{{ $bind }}.state" id="state" />
      @endif

    </x-hub::input.group>

    <x-hub::input.group :label="__('adminhub::inputs.postcode.label')" :error="$errors->first($bind.'.postcode')" for="postcode">
      <x-hub::input.text wire:model="{{ $bind }}.postcode" id="postcode" />
    </x-hub::input.group>
  </div>

  <x-hub::input.group :label="__('adminhub::inputs.country.label')" :error="$errors->first($bind.'.country_id')" for="country" required>
    <x-hub::input.select wire:model="{{ $bind }}.country_id" id="country" required>
      @foreach($this->countries as $country)
        <option value="{{ $country->id }}">{{ $country->name }}</option>
      @endforeach
    </x-hub::input.select>
  </x-hub::input.group>
</div>