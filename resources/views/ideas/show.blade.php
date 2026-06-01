<x-layout title="Idea">
    <h2 class="font-bold mt-2">Your Idea:</h2>
    <div class="mt-6 border-2 border-dashed p-6">
        <div class="mt-6">
            {{ $idea->description }}
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <a href="/ideas/{{ $idea->id }}/edit" class="btn">
                Edit
            </a>
        </div>
    </div>
    <div class="mt-2">
        <a href="{{ route('ideas.index') }}"><< Back to Ideas</a>
    </div>
</x-layout>
