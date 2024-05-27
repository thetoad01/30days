<x-layout>
    <x-slot name="heading">
        Jobs Page
    </x-slot>

    @foreach ($jobs as $job)
    <li>
        <a href="/jobs/{{ $job['id'] }}">
            <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }}
        </a>
    </li>
    @endforeach
</x-layout>