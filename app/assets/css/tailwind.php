<style type="text/tailwindcss">
    @layer utilities {
        .dropdown-link {
            @apply flex items-center w-full px-6 py-1 space-x-2 text-sm text-left transition text-neutral-900 hover:text-neutral-500 flex-nowrap whitespace-nowrap;
        }


        .table-header {
            @apply bg-zinc-50 font-light text-neutral-500 p-4;
        }
        .table-action-trigger {
            @apply w-6 h-6 overflow-hidden flex justify-center items-center hover:bg-zinc-200 transition rounded;
        }



        .input-label {
            @apply block text-sm leading-6 text-neutral-500;
        }
        .input-field {
            @apply block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200;
        }



        .button-primary {
            @apply px-4 py-2.5 text-center text-white transition rounded-xl bg-zinc-800 hover:bg-zinc-700;
        }
    }
</style>