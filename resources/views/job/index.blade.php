<x-layout>
    <x-breadcrumbs class="mb-4" 
      :links="['Jobs' => route('jobs.index')]" />
    <x-card class="mb-4 text-sm">
      <form id="filtering-form" action="{{ route('jobs.index') }}" method="get">
      <div class="mb-4 grid grid-cols-2 gap-4">
        <div>
          <div class="mb-1 font-semibold">
              Search
          </div>
          <x-text-input name="search" value="{{ request('search') }}"  placeholder="Search for any text" form-id="filtering-form"/>
        </div>
        <div>
          <div class="mb-1 font-semibold">
              Salary
          </div>
          <div class="flex space-x-2">
              <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="From" form-id="filtering-form"/>
              <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="To" form-id="filtering-form"/>
          </div>
        </div>
        <div>
          <div class="mb-1 font-semibold">Experience</div>
          <!-- every string in the ucfirst that will be changed into Uppercase to the first letter -->
          <x-radio-group name="experience" :options="array_combine(array_map('ucfirst' ,\App\Models\Job::$experience),\App\Models\Job::$experience"/>
        </div>
        <div>
          <div class="mb-1 font-semibold">Category</div>
          <x-category-group name="category" :options="\App\Models\Job::$category"  />
          
        </div>
      </div>
      <button class="w-full">Filter</button>
      </form>
    </x-card>
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