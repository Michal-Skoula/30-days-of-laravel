@if(isset($job))
<x-layout
    title="{{$job['title']}} job listing"
    description="Job description for {{$job['title']}} role."
>
    <div class="flex w-full justify-between items-center mb-4">
        <h1 class="mb-0">Job listing</h1>
        <p><a href="/jobs">Back to jobs</a></p>
    </div>
    <p>This is the listing for the <strong>{{$job['title']}}</strong> job. The salary is <strong>{{$job['salary']}} Kč</strong> per month.</p>
</x-layout>
@else
<x-layout
    title="Unknown job"
    description="No job found."
>
    <div class="flex w-full justify-between items-center mb-4">
        <h1 class="mb-0">404: No job found</h1>
        <p><a href="/jobs">Back to jobs</a></p>
    </div>
    <p>There is currently no listing with the specified ID. Try again later.</p>
</x-layout>
@endif

