<ul class="space-y-2">
    @foreach($exercises as $exercise)
        <li class="flex justify-between items-center border-b border-gray-700 p-3 mb-2">
            <div>
                <h3 class="font-bold text-lg">{{ $exercise['name'] }}</h3>
                <p class="text-sm text-gray-400">{{ $exercise['category'] }}</p>
            </div>
            <div class="text-right">
                <span class="block font-bold text-xl">{{ $exercise['weight'] }} kg</span>
                <span class="text-sm text-gray-400">{{ $exercise['sets'] }} セット</span>
            </div>
        </li>
    @endforeach
</ul>
