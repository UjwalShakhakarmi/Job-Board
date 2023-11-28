<x-card class="mb-4">
      <div class="flex justify-between">

        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-slate-500">
          ${{ number_format($job->salary)}}
        </div>
      </div>
      <div class="mb-4 flex items-center justify-between text-sm text-slate-500 ">
        
        <div class="flex">
            <div>Company Name</div>
            <div>{{ $job->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
          <x-tag>{{ Str::ucfirst($job->experience) }}</x-tag>
          <x-tag>{{ $job->category }}</x-tag>
        </div>
      </div>
      <!-- converting the line charater into br element using nl2br  -->
      <!-- using the !! its little bit unsecured so we use e() -->
      <p class="text-sm text-slate-500">{!! nl2br(e($job->description)) !!}</p>
        {{$slot}}
    </x-card>