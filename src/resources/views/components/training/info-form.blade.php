<div class="bg-white shadow-md rounded-lg p-6 mb-8">
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">トレーニング部位</label>
        <select id='training-category'
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">トレーニングの種類</label>
        <select id="training-menu"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            <option>ベンチプレス</option>
            <option>スクワット</option>
            <option>デッドリフト</option>
            <option>ダンベルプレス</option>
            <option>プルアップ</option>
            <option>ランニング</option>
        </select>
    </div>
</div>
