<x-layout.home>
    <div data-page="training">
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            トレーニング記録
        </h2>
        <x-training.info-form :categories="$categories" />
        <x-training.weight-rep-form />
    </div>
</x-layout.home>
