@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'flex flex-row justify-between items-center p-3 gap-4 w-420 h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg text-slate-200 focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out']) !!}>
