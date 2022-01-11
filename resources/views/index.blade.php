<x-app-layout>
<div>
    <div class="filters flex space-x-6">
        <div class="w-1/3 ">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="category one">Category one</option>
                <option value="category two">Category one</option>
                <option value="category thre">Category one</option>
                <option value="category four">Category one</option>

            </select>
        </div>

        <div class="w-1/3 ">
            <select name="other_filter" id="other_filter" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter one">Filter one</option>
                <option value="Filter two">Filter one</option>
                <option value="Filter thre">Filter one</option>
                <option value="Filter four">Filter one</option>

            </select>
        </div>

        <div class="w-2/3 relative ">
            <input type="search" placeholder="find somthing" class="w-full rounded-xl bg-white border-none placeholder:text-gray-900 px-4 py-2 pl-8">

            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class=" text-gray-700 w-4" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
            </div>
        </div>


    </div>
</div>
</x-app-layout>
