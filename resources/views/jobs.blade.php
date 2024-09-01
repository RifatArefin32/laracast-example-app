<x-layout>
    {{-- Slot variables --}}
    <x-slot:heading>All Jobs</x-slot:heading>
    <x-slot:titletext>Jobs | Laravel</x-slot:titletext>
    
    {{-- Slot items --}}
    @foreach ($jobs as $jobitem)
        <div style="padding-top: 20px">
            <h2>Job id: {{ $jobitem['id'] }}</h2>
            <h3>Job title: {{ $jobitem['title'] }}</h2>
            <h3>Job salary: <strong>{{ $jobitem['salary'] }}</strong></h2>
            <a href="/job/{{ $jobitem['id'] }}" style="color: blue">see details</a>
        </div>
    @endforeach
</x-layout>
