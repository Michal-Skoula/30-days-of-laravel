<x-layout title="Jobs" description="All available jobs">
    <h1>Jobs board</h1>
    <h2>Available jobs</h2>
    
    @if(!$jobs->isEmpty())
        @foreach($jobs as $job)
            <a href="/jobs/{{$job['id']}}">
                <ul class="mb-4 p-4 border border-gray-300 hover:border-blue-600 rounded transition-colors duration-300">
                    <li>
                        <h3>{{$job['title']}}</h3>
                        <p>{{$job['salary']}} Kč per month</p>
{{--                        @dd($job);--}}
                        <div class="mt-2 flex flex-wrap gap-2 items-center">
                            <small class="py-1 px-2 rounded bg-blue-700 inline-block text-white">{{$job->employer->company}}</small>
                            <small><strong>Employer:</strong> {{$job->employer->name}}</small>
                        </div>
                    </li>
                </ul>
            </a>
        @endforeach
    @else
        <p>No jobs found.</p>
    @endif
    
    
</x-layout>