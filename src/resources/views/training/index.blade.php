<x-layout.home>
    <div data-page="training" class="container mx-auto p-4">
        <h1 class="text-xl font-semibold mb-4">{{ date('Y年m月d日') }}のトレーニングメニュー</h1>

        <!-- トレーニングリスト -->
        <ul class="space-y-4 mb-8">
            @foreach($todayExercises as $exercise)
            <li class="flex justify-between items-center rounded-lg p-4 shadow">
                <div>
                    <h3 class="font-bold text-lg">{{ $exercise['name'] }}</h3>
                    <p class="text-sm">{{ $exercise['category'] }}</p>
                </div>
                <div class="text-right">
                    <span class="block font-bold text-xl">{{ $exercise['weight'] }} kg</span>
                    <span class="text-sm">{{ $exercise['sets'] }} セット</span>
                </div>
            </li>
            @endforeach
        </ul>

        <!-- 新規追加ボタン -->
        <button id="add-exercise-button"
            class="bg-blue-600 rounded-full p-6 fixed bottom-6 right-6 shadow-lg hover:bg-blue-500">
            <i class="fa-solid fa-plus text-white text-2xl"></i>
        </button>
        {{-- 追加画面 --}}
        <div id="modal-container"></div>
    </div>
</x-layout.home>