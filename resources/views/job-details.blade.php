<x-layout>
    <x-slot:heading>Job Details</x-slot:heading>
    <x-slot:titletext>Job Details | Laravel</x-slot:titletext>

    <h1>Job Id: {{$job['id']}}</h1>
    <h1>Job Title: {{$job['title']}}</h1>
    <h1>Job Salary: {{$job['salary']}}</h1>
    <a href="/jobs" style="color: blue">see more jobs</a>
</x-layout>