@props([
    'type' => 'data'
])

@if ($type === 'data')
<td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $slot }}</td>
@elseif ($type === 'head')
<th class="border-b font-medium p-4 pr-8 pb-3 text-slate-400 dark:text-slate-200 text-left">{{ $slot }}</th>
@endif
