<x-layout title="Idea">
    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')
        <div class="col-span-full mt-2">
            <label for="description" class="block text-sm/6 font-bold">Edit Your Idea</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3" class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 outline-amber-950 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-amber-600 sm:text-sm/6">{{ $idea->description }}
                </textarea>
                <x-forms.error name="description"/>
            </div>
        </div>

        <div class="mt-6 flex items-center gap-x-3">
            <button type="submit" class="rounded-md bg-amber-950 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-amber-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-700">Update</button>
            <button type="submit" form="delete-idea-form" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-amber-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600">Delete</button>
        </div>
    </form>
    <form action="/ideas/{{ $idea->id }}" id="delete-idea-form" method="POST">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
