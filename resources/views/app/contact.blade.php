<x-layout title="Contacts" description="All contacts">
    <h1>Contacts</h1>
{{--    @dd($contacts)--}}
    @if(!$contacts->isEmpty())
        <ul>
        @foreach($contacts as $contact)
            <li class="mb-4 p-4 border border-gray-300 rounded">
                <h3>{{$contact->name}}</h3>
                <p>{{$contact->job_title}}</p>
                <p><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
                @if(isset($contact->phone))
                    <p><a href="tel:{{$contact->phone}}">{{$contact->phone}}</a></p>
                @endif
            </li>
        @endforeach
        </ul>
        {{$contacts->links()}}
    @else
        <p>No contacts found.</p>
    @endif
    
</x-layout>