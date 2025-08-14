<div class="overflow-x-auto rounded-lg border border-zinc-200 dark:border-zinc-700">
    <table {{ $attributes->merge(['class' => 'min-w-full divide-y divide-zinc-200 dark:divide-zinc-700']) }}>
        {{ $slot }}
    </table>
</div>
