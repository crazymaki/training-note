<div id="progress-calender" class="bg-gray-100 min-h-screen flex flex-col items-center py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">進捗管理 - 1ヶ月カレンダー</h1>

    <div class="flex items-center justify-between w-full max-w-5xl mb-4">
        <button onclick="changeMonth(-1)" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">前の月</button>
        <h2 id="calendar-month" class="text-xl font-semibold text-gray-800"></h2>
        <button onclick="changeMonth(1)" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">次の月</button>
    </div>

    <div class="w-full max-w-5xl bg-white shadow-md rounded-lg p-6">
        <div class="grid grid-cols-7 gap-4 text-center text-gray-600 font-semibold">
            <div>日</div>
            <div>月</div>
            <div>火</div>
            <div>水</div>
            <div>木</div>
            <div>金</div>
            <div>土</div>
        </div>
        <div class="grid grid-cols-7 gap-4 mt-4">
            <div></div>
            <div></div>
            <div></div>
            <div></div>

            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(1)">1</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(2)">2</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(3)">3</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(4)">4</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(5)">5</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(6)">6</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(7)">7</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(8)">8</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(9)">9</div>
            <div class="p-4 h-24 bg-blue-100 rounded-lg" onclick="openModal(10)">10<br><span
                    class="text-xs text-blue-600">上半身</span></div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(11)">11</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(12)">12</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(13)">13</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(14)">14</div>
            <div class="p-4 h-24 bg-orange-100 rounded-lg" onclick="openModal(15)">15<br><span
                    class="text-xs text-orange-600">有酸素</span></div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(16)">16</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(17)">17</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(18)">18</div>
            <div class="p-4 h-24 bg-gray-100 rounded-lg" onclick="openModal(19)">19</div>
            <div class="p-4 h-24 bg-green-100 rounded-lg" onclick="openModal(20)">20<br><span
                    class="text-xs text-green-600">下半身</span></div>
        </div>
    </div>
</div>
