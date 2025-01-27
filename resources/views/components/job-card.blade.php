@props(['job'])

<x-panel class="flex flex-col text-center">
<div class="flex justify-start text-sm">{{{$job->employer->name}}}</div>

    <div class="py-8">
        <h3 class="font-bold group-hover:text-blue-600 text-xl transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-sm mt-4">{{$job->schedule}} + {{$job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-employer-logo :width="45" />

    </div>
</x-panel>