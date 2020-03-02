<div>
    <form wire:submit.prevent="loginAs" action="#">
        <div class="form-group">
            <label for="user">Login As:</label>
            <select
                class="form-control"
                name="user_id"
                id="user"
                wire:model="selected_user">
                <option value="">Select a User</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('selected_user') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group"><button type="submit" class="btn btn-primary">Login</button></div>

    </form>
</div>
