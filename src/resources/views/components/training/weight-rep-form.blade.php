<div id="set-container" class="mb-4">
    <div class="flex space-x-4 mb-4">
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700">重量 (kg)</label>
            <input type="number"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                min="0" max="1000" placeholder="重量を入力">
        </div>
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700">回数</label>
            <input type="number"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                min="0" max="100" placeholder="回数を入力">
        </div>
    </div>
</div>

<div class="text-right">
    <button type="button" class="bg-blue-500 text-white py-2 px-4 rounded-lg" onclick="addSet()">セットを追加</button>
</div>

</div>

<div class="text-center">
    <button class="bg-green-500 text-white py-2 px-6 rounded-lg">トレーニングを保存</button>
</div>