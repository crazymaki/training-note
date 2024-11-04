<aside class="w-64 bg-gray-800 text-white flex flex-col justify-between p-4 h-screen">
    <div>
        <h2 class="text-2xl font-bold mb-6">メニュー</h2>
        <nav class="flex flex-col space-y-4">
            <a href="{{ route('home') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white py-2 px-4 rounded">ホーム</a>
            <a href="{{ route('training.index') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white py-2 px-4 rounded">トレーニング記録</a>
            <a href="{{ route('progress.index') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white py-2 px-4 rounded">進捗管理</a>
            <a href="{{ route('setting.index') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white py-2 px-4 rounded">設定</a>
        </nav>
    </div>

    @auth
    <div class="flex flex-col items-center">
        <span class="text-gray-300 mb-4">ユーザー名: {{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="bg-red-500 text-white py-2 px-4 rounded-lg">ログアウト</button>
        </form>
    </div>
    @endauth
    @guest
    <div class="flex flex-col items-center">
        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg">ログイン</button>
        <button class="bg-red-500 text-white py-2 px-4 rounded-lg">ログアウト</button>
    </div>
    @endguest
</aside>
