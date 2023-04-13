@if(session()->has('message'))
    <div class="px-5 py-4 border-gray-900 bg-green-400 text-white mb-10">
        <h3 class="text-white font-bold">{{session('message')}}</h3>
    </div>
@endif
