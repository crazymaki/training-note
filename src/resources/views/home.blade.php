<x-layout.home>
    <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
        TrainingNote
    </h2>
    @guest
    <div class="flex flex-wrap justify-center">
        <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
            <x-element.button :href="route('login')">ログイン</x-element.button-a>
                <x-element.button :href="route('register')" theme="secondary">会員登録</x-element.button-a>
        </div>
    </div>
    @endguest
    <x-home.goal-show></x-home.goal-show>
    <x-home.training-calendar></x-home.training-calendar>
</x-layout.home>