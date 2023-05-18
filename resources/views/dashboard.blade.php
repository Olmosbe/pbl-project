<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            {{ __('Welcome to our website') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}

                    {{-- dev code  --}}

                <div class="wrapper">
                    <input type="text" class="input-field">
                    <div class="content-box">
                    <div class="typing-text">
                        <p></p>
                    </div>
                    <div class="content">
                        <ul class="result-details">
                        <li class="time">
                            <p>Time Left:</p>
                            <span><b>60</b>s</span>
                        </li>
                        <li class="mistake">
                            <p>Mistakes:</p>
                            <span>0</span>
                        </li>
                        <li class="wpm">
                            <p>WPM:</p>
                            <span>0</span>
                        </li>
                        <li class="cpm">
                            <p>CPM:</p>
                            <span>0</span>
                        </li>
                        </ul>
                        <button>Try Again</button>
                    </div>
                    </div>
                </div>
                    {{-- dev code end --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 

