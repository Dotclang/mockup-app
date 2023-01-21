<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-sm text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in admin!") }}
                    @if(auth()->user()->is_admin)
                        @forelse($notifications as $notification)
                            <div class="alert bg-orange-200 m-4 p-3 rounded-lg flex flex-row justify-between" role="alert">
                                <div>
                                    [{{ $notification->created_at }}] User {{ $notification->data['name'] }} ({{ $notification->data['email'] }}) has just registered.
                                </div>
                                <a href="#" class="mark-as-read bg-orange-400 px-2 mx-1 rounded-md min-w-fit h-fit hover:bg-gray-200 hover:text-gray-700" data-id="{{ $notification->id }}">
                                    Mark as read
                                </a>
                            </div>

                            @if($loop->last)
                                <a href="#" class="mark-all relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-orange-700 rounded-lg hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800" id="mark-all">
                                    <svg class="w-2 h-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <span class="sr-only">Mark all as read</span>
                                    <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">{{$notifications->count()}}</div>
                                </a>
                            @endif
                        @empty
                            <p>There are no new notifications</p>
                        @endforelse

                        <script type="module">
                            function sendMarkRequest(id = null) {
                                return $.ajax("{{ route('admin.markNotification') }}", {
                                    method: 'POST',
                                    data: {
                                        _token : "{{ csrf_token() }}",
                                        id
                                    }
                                });
                            }

                            $(function() {
                                $('.mark-as-read').click(function() {
                                    let request = sendMarkRequest($(this).data('id'));
                                    request.done(() => {
                                        $(this).parents('div.alert').remove();
                                    });
                                });
                                $('#mark-all').click(function() {
                                    let request = sendMarkRequest();
                                    request.done(() => {
                                        $('div.alert').remove();
                                    })
                                });
                            });
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
