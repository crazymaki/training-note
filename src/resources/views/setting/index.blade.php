<x-layout.home>
    <div class="bg-gray-100 min-h-screen flex justify-center items-center p-8">
        <div class="w-full max-w-lg bg-white shadow-md rounded-lg p-6 justify-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">設定ページ</h1>

            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">ユーザー設定</h2>

                <label class="block text-gray-700 mb-2" for="username">ユーザー名</label>
                <input id="username" type="text"
                    class="w-full p-3 mb-4 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                    placeholder="ユーザー名を入力" value="{{ Auth::user()?->name }}">

                <label class="block text-gray-700 mb-2" for="password">パスワード</label>
                <input id="password" type="password"
                    class="w-full p-3 mb-4 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                    placeholder="パスワードを入力">

                <label class="block text-gray-700 mb-2" for="email">メールアドレス</label>
                <input id="email" type="email"
                    class="w-full p-3 mb-4 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                    placeholder="メールアドレスを入力" value="{{ Auth::user()?->email }}">

                <label class="block text-gray-700 mb-2" for="height">身長 (cm)</label>
                <input id="height" type="number"
                    class="w-full p-3 mb-4 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                    placeholder="身長を入力" value="{{ Auth::user()?->height }}">
            </div>

            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">システム設定</h2>

                <div class="mb-4">
                    <span class="block text-gray-700 mb-2">週次の進捗報告メール</span>
                    <label class="inline-flex items-center mr-4">
                        <input type="radio" name="weekly-report" class="form-radio text-blue-600" value="1">
                        <span class="ml-2">必要</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="weekly-report" class="form-radio text-blue-600" value="0">
                        <span class="ml-2">不要</span>
                    </label>
                </div>

                <div class="mb-4">
                    <span class="block text-gray-700 mb-2">月間の進捗報告メール</span>
                    <label class="inline-flex items-center mr-4">
                        <input type="radio" name="monthly-report" class="form-radio text-blue-600" value="1">
                        <span class="ml-2">必要</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="monthly-report" class="form-radio text-blue-600" value="0">
                        <span class="ml-2">不要</span>
                    </label>
                </div>
            </div>

            <button class="w-full bg-blue-600 text-white p-3 rounded-lg font-semibold hover:bg-blue-700">設定を保存</button>
        </div>
    </div>
</x-layout.home>
