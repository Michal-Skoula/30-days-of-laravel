<x-layout title="Contacts" description="All contacts">
    <div class="flex flex-wrap justify-between items-center mb-3">
        <h1 class="mb-0">Contacts</h1>
        <x-button href="/contacts/add">Add new contact</x-button>
    </div>
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