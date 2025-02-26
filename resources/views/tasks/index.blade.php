<x-layout>
    <div class="flex justify-center items-center">
        <div class="overflow-x-auto w-1/2">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($tasks as $task)
                <tr>
                    <td> {{ $task->id}}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description}}</td>
                    <td>{{ $task->status}}</td>
                    <td>

                        <form action="{{ route('tasks.show', $task->id) }}" method="get">
                            <button type="submit" class="btn btn-square btn-info btn-soft my-4">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                    <path d="M13 0L16 3L9 10H6V7L13 0Z" fill="#0087a6"></path>
                                    <path d="M1 1V15H15V9H13V13H3V3H7V1H1Z" fill="#0087a6"></path>
                                    </g>
                                </svg>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-square btn-error btn-dash my-4">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                    <path
                                    d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z"
                                    fill="#b00000"></path>
                                    </g>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $tasks-> links()}}
        </div>
    </div>
</x-layout>
