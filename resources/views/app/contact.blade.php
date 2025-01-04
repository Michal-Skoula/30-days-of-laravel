<x-layout title="Contacts" description="All contacts">
    <h1>Contacts</h1>
    
    @if(!$contacts->isEmpty())
        @foreach($contacts as $contact)
                <ul class="mb-4 p-4 border border-gray-300 rounded">
                    <li>
                        <h3>{{$contact['name']}}</h3>
                        <p>{{$contact['job_title']}}</p>
                        <p><a href="mailto:{{$contact['email']}}">{{$contact['email']}}</a></p>
                        @if(isset($contact['phone']))
                            <p><a href="tel:{{$contact['phone']}}">{{$contact['phone']}}</a></p>
                        @endif
                    </li>
                </ul>
        @endforeach
    @else
        <p>No contacts found.</p>
    @endif
    
</x-layout>