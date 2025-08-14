<x-layouts.app :title="__('Admin Dashboard')">
    <div class="overflow-x-auto border border-zinc-200 dark:border-zinc-700 rounded-lg">
        <table class="w-full table-auto border-collapse text-center">
            <thead class="bg-zinc-50 dark:bg-zinc-900">
                <tr>
                    <th class="px-6 py-3 text-sm font-semibold text-zinc-700 dark:text-zinc-300">Id Siswa</th>
                    <th class="px-6 py-3 text-sm font-semibold text-zinc-700 dark:text-zinc-300">Nama</th>
                    <th class="px-6 py-3 text-sm font-semibold text-zinc-700 dark:text-zinc-300">Email</th>
                    <th class="px-6 py-3 text-sm font-semibold text-zinc-700 dark:text-zinc-300">Kelas</th>
                    <th class="px-6 py-3 text-sm font-semibold text-zinc-700 dark:text-zinc-300">Jurusan</th>
                    <th class="px-6 py-3 text-sm font-semibold text-zinc-700 dark:text-zinc-300">Opsi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700 bg-white dark:bg-zinc-800">
                <tr>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">G001</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">Ahmad Fauzi</td>
                    <td class="px-6 py-3 text-sm text-zinc-500 dark:text-zinc-400">ahmad.fauzi@example.com</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">Matematika</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">X IPA 1</td>
                    <td class="px-6 py-3 text-sm">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md mr-2">Edit</button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">G002</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">Siti Nurhaliza</td>
                    <td class="px-6 py-3 text-sm text-zinc-500 dark:text-zinc-400">siti.nurhaliza@example.com</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">Bahasa Inggris</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">XI IPS 2</td>
                    <td class="px-6 py-3 text-sm">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md mr-2">Edit</button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">G003</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">Budi Santoso</td>
                    <td class="px-6 py-3 text-sm text-zinc-500 dark:text-zinc-400">budi.santoso@example.com</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">Fisika</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">XII IPA 3</td>
                    <td class="px-6 py-3 text-sm">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md mr-2">Edit</button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">G004</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">Ratna Dewi</td>
                    <td class="px-6 py-3 text-sm text-zinc-500 dark:text-zinc-400">ratna.dewi@example.com</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">Kimia</td>
                    <td class="px-6 py-3 text-sm text-zinc-900 dark:text-zinc-100">XI IPA 1</td>
                    <td class="px-6 py-3 text-sm">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md mr-2">Edit</button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layouts.app>
