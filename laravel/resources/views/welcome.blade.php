<x-layout>
    Welcome
    @if(!session()->has('userId'))
    <br><a class="active" href="/login">Login</a>
    @endif
</x-layout>