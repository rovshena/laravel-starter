{{--@formatter:off--}}
<x-mail::message>
# Job Posted

Congrats! Your job is now live on our website.

<x-mail::button :url="route('jobs.show', $job)">
    View Job
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
{{--@formatter:on--}}
