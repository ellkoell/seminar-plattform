<x-layout title="Idea">
    <form method="POST" action="/ideas">
        @csrf
        <div class="col-span-full mt-3">
            <label for="description" class="block text-sm/6 font-bold">Create a New Idea</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                          class="textarea w-full @error('description') textarea-error @enderror"></textarea>
                <x-forms.error name="description" />
            </div>
            <p class="mt-3 text-sm/6">Have an idea you want to save for later ?</p>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="rounded-md bg-amber-950 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-amber-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-700">Save</button>
        </div>
    </form>
</x-layout>
