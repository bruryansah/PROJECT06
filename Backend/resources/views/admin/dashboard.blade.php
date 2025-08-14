<x-layouts.app :title="__('admin Dashboard')">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Dashboard') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage the modules data from here') }}
        </flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    @session('success')
        <p class="text-green-600">{{ $value }}</p>
    @endsession

    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="flex justify-between gap-4 p-4">
            <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg text-center flex-1 min-w-[200px]">
                <h2 class="text-lg font-bold">Siswa</h2>
                <p class="text-2xl font-semibold">0</p>
            </div>

            <div class="bg-green-500 text-white p-6 rounded-lg shadow-lg text-center flex-1 min-w-[200px]">
                <h2 class="text-lg font-bold">Guru</h2>
                <p class="text-2xl font-semibold">0</p>
            </div>

            <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-lg text-center flex-1 min-w-[200px]">
                <h2 class="text-lg font-bold">Absen Masuk</h2>
                <p class="text-2xl font-semibold">0</p>
            </div>

            <div class="bg-red-500 text-white p-6 rounded-lg shadow-lg text-center flex-1 min-w-[200px]">
                <h2 class="text-lg font-bold">Absen Pulang</h2>
                <p class="text-2xl font-semibold">0</p>
            </div>
        </div>
    </div>

</x-layouts.app>
