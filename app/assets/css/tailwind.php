<style type="text/tailwindcss">
    @layer utilities {
        .transition-default {
            @apply transition duration-300 ease-in-out;
        }
        .transition-fast {
            @apply transition duration-100 ease-in-out;
        }

        .flex-center {
            @apply flex items-center justify-center;
        }
        .flex-start {
            @apply flex items-center justify-start;
        }
        .flex-end {
            @apply flex items-center justify-end;
        }

        .flex-col-center {
            @apply flex flex-col items-center justify-center;
        }
        .flex-col-default {
            @apply flex flex-col;
        }
        .flex-col-start {
            @apply flex flex-col items-start justify-start;
        }
        .flex-col-end {
            @apply flex flex-col items-end justify-start;
        }

        .form-control {
            @apply bg-zinc-100 w-full;
        }

        .btn-primary {
            @apply transition-default bg-indigo-500 hover:bg-indigo-400 text-white text-center rounded font-semibold;
        }

        .link-primary {
            @apply transition-default underline decoration-2 text-indigo-600 hover:text-indigo-400;
        }
        .link-secondary {
            @apply transition-default underline decoration-2 text-zinc-800 hover:text-zinc-600;
        }

        table {
            @apply w-full table-auto;
        }
        tr.header {
            @apply border-b-2 border-zinc-100;
        }
        th {
            @apply text-left p-4 font-normal text-zinc-400;
        }
        tbody {
            @apply divide-y divide-zinc-100;
        }
        tr.row {
            @apply hover:bg-zinc-50 transition-default;
        }
        td {
            @apply p-4;
        }
    }
</style>