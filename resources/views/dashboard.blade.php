<x-layout :title="'Dashboard'">
    @if ($query == null || $query === 'history')
        <x-history></x-history>
    @endif

    @if ($query === 'order')
        <x-orderform></x-orderform>
    @endif

    @if ($query === 'profile')
        <h1>Profile</h1>
    @endif
</x-layout>
