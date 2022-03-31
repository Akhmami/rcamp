<x-app-layout>
    <div class="bg-white">
        <x-navbar />
        <main class="overflow-hidden">
            <!-- Contact grid -->
            <section class="bg-warm-gray-50">
                <div class="max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                    <livewire:participant-table />
                </div>
            </section>
        </main>

        <footer class="bg-warm-gray-900" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>

        </footer>
    </div>
</x-app-layout>