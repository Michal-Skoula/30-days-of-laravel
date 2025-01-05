<x-layout
    title="Add new contact"
>
    <form method="POST" action="/contacts/create">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Add a new contact</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Just fill out a couple of fields and your contact will be listed!</p>
                
                <div class="sm:col-span-4 my-6">
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">Full name</label>
                    <div class="mt-2">
                        <input required placeholder="John Doe" id="name" name="name" type="text" autocomplete="name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="sm:col-span-4 my-6">
                    <label for="job_title" class="block text-sm/6 font-medium text-gray-900">Job title</label>
                    <div class="mt-2">
                        <input required placeholder="Sr. Developer" id="job_title" name="job_title" type="text" autocomplete="on" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="sm:col-span-4 my-6">
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input required placeholder="john.doe@acme.com" id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="sm:col-span-4 my-6">
                    <label for="tel" class="block text-sm/6 font-medium text-gray-900 ">Phone number</label>
                    <div class="mt-2">
                        <input placeholder="+420 123 456 789" id="tel" name="tel" type="tel" autocomplete="tel" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/contacts" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</x-layout>