<div>
    <x-text-input id="created_by_id" class="block mt-1 w-1/3 hidden" type="text" name="created_by_id" value="{{ Auth::user()->id }}" />
    <x-input-error :messages="$errors->get('created_by_id')" class="mt-2" />
</div>
<div>
    <x-input-label for="name" :value="__('interface.tasks.form.name')" />
    <x-text-input id="name" class="block mt-1 w-1/3" type="text" name="name" :value="old('name', $task->name ?? null)" required autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>
<div>
    <x-input-label for="description" :value="__('interface.tasks.form.description')" class="mt-4" />
    <x-textarea id="description" class="block mt-1 w-1/3" name="description" autofocus >
        {{ old('description', $task->description ?? null) }}
    </x-textarea>
    <x-input-error :messages="$errors->get('description')" class="mt-2" />
</div>
<div>
    <x-input-label for="status_id" :value="__('interface.tasks.form.status')" class="mt-4" />
    <x-selector-input id="status_id" class="block mt-1 w-1/3" name="status_id" :value="old('status_id', $task->status_id ?? null)" required autofocus >
        @foreach($taskStatuses as $status)
            <option value="{{ $status->id }}" {{ old('status_id', $task->status_id ?? null) === $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
        @endforeach
    </x-selector-input>
    <x-input-error :messages="$errors->get('status_id')" class="mt-2" />
</div>
<div>
    <x-input-label for="assigned_to_id" :value="__('interface.tasks.form.performer')" class="mt-4" />
    <x-selector-input id="assigned_to_id" class="block mt-1 w-1/3" name="assigned_to_id" autofocus >
        <option value=""></option>
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ old('assigned_to_id', $task->assigned_to_id ?? null) === $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
        @endforeach
    </x-selector-input>
    <x-input-error :messages="$errors->get('assigned_to_id')" class="mt-2" />
</div>