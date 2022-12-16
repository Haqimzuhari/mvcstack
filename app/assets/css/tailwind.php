<style type="text/tailwindcss">
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
        .flex-col-start {
            @apply flex flex-col items-center justify-start;
        }
        .flex-col-end {
            @apply flex flex-col items-center justify-end;
        }

        .btn {
            @apply transition-fast focus:outline-none;
        }
        .btn-primary {
            @apply text-rose-50 bg-rose-500 hover:bg-rose-600 focus:ring-4 focus:ring-rose-200 focus:bg-rose-600 rounded-md tracking-wider font-semibold text-sm;
        }
        .btn-secondary {
            @apply text-zinc-900 bg-zinc-300 hover:bg-zinc-200 focus:ring-4 focus:ring-zinc-200 focus:bg-zinc-300 rounded-md tracking-wider font-semibold text-sm;
        }
        .btn-danger {
            @apply text-red-50 bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-200 focus:bg-red-600 rounded-md tracking-wider font-semibold text-sm;
        }
        .btn-disabled {
            @apply text-zinc-400 bg-zinc-200 rounded-md tracking-wider font-semibold text-sm cursor-not-allowed pointer-events-none;
        }

        .form {
            @apply flex flex-col items-start space-y-1;
        }

        .label {
            @apply text-sm font-bold;
        }
        .label.danger {
            @apply text-red-800;
        }

        .form-input-group {
            @apply w-full relative;
        }
        .form-input {
            @apply appearance-none focus:outline-none transition-fast text-sm tracking-wider font-light rounded-lg w-full focus:ring-4 border border-transparent;
        }
        .form-input.primary {
            @apply text-zinc-800 placeholder-zinc-300 bg-zinc-100 focus:bg-white focus:ring-rose-200 focus:border-rose-400;
        }
        .form-input.disabled {
            @apply text-zinc-800 placeholder-zinc-300 bg-zinc-100 focus:bg-white focus:ring-rose-200 focus:border-rose-400;
        }

        .form-error {
            @apply flex space-x-1 items-center text-red-800 text-sm font-semibold;
        }

        .form-input-icon {
            @apply absolute inset-y-0 flex-center pointer-events-none
        }

        .link {
            @apply transition-default;
        }
        .link.primary {
            @apply hover:underline hover:text-rose-800;
        }
    </style>