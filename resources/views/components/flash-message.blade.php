@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-0 left-1/2 transform -translate bg-laravel text-white px-48 py-e">
        <p>{{session('message')}}</p>
    </div>
@endif