<x-layout>
    <x-breadcrumbs  class="mb-4"
    :links="['Jobs' => route('jobs.index'), $job->title => '#']"/>
    <!-- In the blade components we pass the attribute using : followed by the attribute name  -->
    <!-- suggests that it's receiving a variable or parameter named $job. -->
    <x-job-card :$job >
        <p class="text-sm text-slate-500 ">
        {!! nl2br(e($job->description)) !!}
    q   </p>

    <x-job-card/>
    
</x-layout>