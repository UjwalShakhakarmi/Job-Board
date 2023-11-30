<x-layout>
    <x-breadcrumbs class="mb-4" 
      :links="['Jobs' => route('jobs.index')]" />
    @foreach ($jobs as $job)
    <!-- card blade ma gayera merge hunxa css sanga  -->
    <x-job-card class="mb-4" :$job>
    <div class="mt-3">
      <x-link-button :href="route('jobs.show',$job)">
        Show
      </x-link-button>
      </div>
    </x-job-card>
    @endforeach
</x-layout>