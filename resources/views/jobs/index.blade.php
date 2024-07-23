<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's find your next dream job</h1>
        
            <form action="" class="mt-6">
                <input type="text" class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl" placeholder="Web developer">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Top jobs</x-section-heading>
        
            <div class="grid lg:grid-cols-3 gap-8 mt-3">
                @foreach($jobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>
    
        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
    
        <section>
            <x-section-heading>Recent jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>