<section class="py-6 sm:py-12 dark:bg-gray-100 dark:text-gray-800">
    <div class="container p-6 mx-auto space-y-8">
        <div class="space-y-2 text-center">
            <h2 class="text-3xl font-bold">important tecnologys</h2>
            <p class="font-serif text-sm dark:text-gray-600">The smart tecnologys in Joradn</p>
        </div>
        <div class="grid grid-cols-2 gap-x-3 gap-y-4 md:grid-cols-6 lg:grid-cols-3">
            @foreach($test as $testss)
                <img alt="" class="object-cover w-full h-52 dark:bg-gray-500"
                     src="{{ Storage::url('images/'.$testss->image) }}">
                <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-600">
                    <span> price of product {{$testss->price}}$</span>
                </div>

            @endforeach
        </div>
    </div>
</section>
