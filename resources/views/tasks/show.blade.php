<x-layout>
    <form class="flex flex-col" action="{{ route('tasks.store') }}" method="POST">
        @csrf
        @method('put')
        <label
        <label for="name">Task Name</label>
        <input type="text" id="name" name="name" value="{{ $task->name }}" required>

        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="{{ $task->description }}">

        <label for="status">:</label>
        <select id="status" name="status" required>
            @foreach (['todo', 'in_progress', 'completed'] as $status)
            <option value="{{ $status }}" {{ $task->status == $status ? 'selected' : '' }}>
                {{ $status }}
            </option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Submit Changes</button>

        @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error)
            <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
        @endif

    </form>
</x-layout>
