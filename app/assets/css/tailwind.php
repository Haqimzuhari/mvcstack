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

        .btn {
            @apply transition-default focus:outline-none;
        }
        .btn-primary {
            @apply text-indigo-50 bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-offset-1 focus:ring-indigo-200 focus:bg-indigo-600 rounded-lg tracking-wider font-semibold text-sm shadow-sm shadow-black/20;
        }
        .btn-secondary {
            @apply text-gray-900 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:ring-offset-1 focus:ring-gray-200 focus:bg-gray-300 rounded-lg tracking-wider font-semibold text-sm shadow-sm shadow-black/20;
        }
        .btn-danger {
            @apply text-red-50 bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-offset-1 focus:ring-red-200 focus:bg-red-600 rounded-lg tracking-wider font-semibold text-sm shadow-sm shadow-black/20;
        }
        .btn-disabled {
            @apply text-gray-400 bg-gray-200 rounded-lg tracking-wider font-semibold text-sm shadow-sm shadow-black/20 cursor-not-allowed pointer-events-none;
        }

        .form {
            @apply flex flex-col items-start space-y-1;
        }

        .label {
            @apply text-sm font-semibold;
        }
        .label.danger {
            @apply text-red-800;
        }

        .form-input-group {
            @apply w-full relative;
        }
        .form-input {
            @apply appearance-none focus:outline-none transition-fast text-xs tracking-wider font-normal rounded-lg w-full focus:ring-4 focus:ring-offset-1;
        }
        .form-input.primary {
            @apply text-gray-800 placeholder-gray-300 bg-gray-100 focus:bg-white focus:ring-indigo-300;
        }

        .form-error {
            @apply flex space-x-1 items-center text-red-800 text-xs font-semibold;
        }

        .form-input-icon {
            @apply absolute inset-y-0 flex-center pointer-events-none
        }

        .link-primary {
            @apply hover:underline hover:text-indigo-800 transition-fast;
        }
    </style>