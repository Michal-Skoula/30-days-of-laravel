<x-layout title="Jobs" description="All available jobs">
    <h1>Jobs board</h1>
    <h2>Available jobs</h2>
    
    @foreach($jobs as $job)
        <a href="/jobs/{{$job['id']}}">
            <ul class="mb-4 p-4 border border-gray-300 hover:border-blue-600 rounded transition-colors duration-300">
                <li>
                    <h3>{{$job['title']}}</h3>
                    <p>{{$job['salary']}} Kč per month</p>
                </li>
            </ul>
        </a>
        
    @endforeach
</x-layout>