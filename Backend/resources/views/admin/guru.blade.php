<x-layouts.app :title="__('Admin Dashboard')">
<div class="p-6 bg-zinc-900 rounded-xl shadow-lg overflow-x-auto">
    <h1 class="text-2xl font-bold text-white mb-4">Data Guru</h1>
    <table class="min-w-full border-collapse border border-zinc-700 rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-zinc-800">
                <th class="px-6 py-3 text-left text-sm font-semibold text-white">Id Guru</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-white">Nama</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-white">Email</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-white">Mapel</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-white">Kelas</th>
                <th class="px-6 py-3 text-center text-sm font-semibold text-white">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-zinc-700">
            <tr class="hover:bg-zinc-700 transition-colors duration-200">
                <td class="px-6 py-4 text-sm text-zinc-300">1</td>
                <td class="px-6 py-4 text-sm text-zinc-300">Budi Santoso</td>
                <td class="px-6 py-4 text-sm text-zinc-300">budi@example.com</td>
                <td class="px-6 py-4 text-sm text-zinc-300">Matematika</td>
                <td class="px-6 py-4 text-sm text-zinc-300">X IPA 1</td>
                <td class="px-6 py-4 flex justify-center gap-2">
                    <button class="px-3 py-1 text-xs font-semibold text-white bg-yellow-500 rounded hover:bg-yellow-600 transition">Edit</button>
                    <button class="px-3 py-1 text-xs font-semibold text-white bg-red-500 rounded hover:bg-red-600 transition">Hapus</button>
                </td>
            </tr>
            <tr class="hover:bg-zinc-700 transition-colors duration-200">
                <td class="px-6 py-4 text-sm text-zinc-300">2</td>
                <td class="px-6 py-4 text-sm text-zinc-300">Siti Aminah</td>
                <td class="px-6 py-4 text-sm text-zinc-300">siti@example.com</td>
                <td class="px-6 py-4 text-sm text-zinc-300">Bahasa Inggris</td>
                <td class="px-6 py-4 text-sm text-zinc-300">X IPS 2</td>
                <td class="px-6 py-4 flex justify-center gap-2">
                    <button class="px-3 py-1 text-xs font-semibold text-white bg-yellow-500 rounded hover:bg-yellow-600 transition">Edit</button>
                    <button class="px-3 py-1 text-xs font-semibold text-white bg-red-500 rounded hover:bg-red-600 transition">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</x-layouts.app>
