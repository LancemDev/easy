
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
                @php
                $categories = App\Models\DrugCategories::all();
                @endphp
                @if(session('success'))
                    <x-success-banner>
                        {{ session('success') }}
                    </x-success-banner>
                @endif
                <x-add-drugs :categories="$categories" />
            </div>
        </div>
    </div>
</x-app-layout> 