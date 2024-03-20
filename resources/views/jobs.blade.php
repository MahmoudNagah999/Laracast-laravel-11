<x-layout>
    <x-slot:heading>
        Jobs List
    </x-slot:heading>
    
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-600 hover:underline"> 
                    <strong> {{$job['title']}} </strong>: Pay {{$job['salary']}} per year.
                </a> 
            </li>   
        @endforeach
    </ul>
</x-layout>
