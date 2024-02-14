<x-guest-layout>
    <div class="container mx-auto mt-5 px-8">

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Update Product Category</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Update the product category details.</p>

                <form method="POST"
                    @if ($product_Category->id) action="{{ route('product-category.update', $product_Category->id) }}"
                    @else
                    action="{{ route('product-category.store') }}" @endif
                    class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

                    @csrf

                    @if ($product_Category->id)
                        @method('PUT')
                    @endif

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="col-span-full">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                            <div class="mt-2">
                                <input id="name" name="name" type="text" value="{{ old('name', $product_Category->name )}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    required autofocus autocomplete="name" />
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Name of the product category.</p>
                            @error('name')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug</label>
                            <div class="mt-2">
                                <input id="slug" name="slug" type="text"  value="{{ old('slug', $product_Category->slug )}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    required autofocus autocomplete="slug" />
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Slug of the product category.</p>
                            @error('slug')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>

                    <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</x-guest-layout>
