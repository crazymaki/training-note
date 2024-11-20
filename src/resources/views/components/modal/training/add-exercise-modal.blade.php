<div id="add-exercise-modal" class="hidden fixed inset-0 bg-opacity-50 flex justify-center items-center">
    <div class="rounded-lg p-6 shadow-lg w-96">
        <h2 class="text-xl font-bold mb-4">トレーニングを追加</h2>
        <form id="add-exercise-form">
            <div class="mb-4">
                <label class="block text-sm font-medium ">部位</label>
                <select id='training-category'
                    class="mt-1 block w-full border-gray-700 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium ">種目</label>
                <div class="mb-4">
                    <select id="training-menu"
                        class="mt-1 block w-full border-gray-700 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </select>
                </div>
            </div>
            <div class="mb-4 flex gap-4">
                <div>
                    <label class="block text-sm font-medium ">重量 (kg)</label>
                    <input type="number" name="weight" class="mt-1 block w-full rounded-md  border-gray-700 ">
                </div>
                <div>
                    <label class="block text-sm font-medium ">セット数</label>
                    <input type="number" name="sets" class="mt-1 block w-full rounded-md  border-gray-700 ">
                </div>
            </div>
            <div class="flex justify-end gap-4">
                <button type="button" id="close-modal" class="bg-gray-500 px-4 py-2 rounded hover:bg-gray-400">
                    キャンセル
                </button>
                <button type="submit" class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-500">追加
                </button>
            </div>
        </form>
    </div>
</div>