<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$ 90,000" />
        <x-forms.input label="location" name="location" placeholder="Boise, Idaho" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="Url" name="url" placeholder="https://www.google.com" />
        <x-forms.checkbox label="Feature" name="featured" />
        <x-forms.input label="Tags(comma seperated)" name="tags" placeholder="video, production, software" />

        <x-forms.button>Publish</x-forms.button>


    </x-forms.form>
</x-layout>