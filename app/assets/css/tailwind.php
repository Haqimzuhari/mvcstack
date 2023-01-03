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
    .flex-col-start {
        @apply flex flex-col items-center justify-start;
    }
    .flex-col-end {
        @apply flex flex-col items-center justify-end;
    }

    .btn {
        @apply transition-default focus:outline-none;
    }
    .btn-primary {
        @apply text-white bg-primary hover:bg-primary-dark focus:ring-4 focus:ring-primary-lighter focus:bg-primary-dark rounded-md font-semibold text-xs;
    }
    .btn-secondary {
        @apply text-black bg-secondary-lighter hover:bg-neutral-lighter focus:ring-4 focus:ring-neutral-lightest focus:bg-neutral-lighter rounded-md font-semibold text-xs;
    }
    .btn-danger {
        @apply text-white bg-danger hover:bg-danger-dark focus:ring-4 focus:ring-danger-lighter focus:bg-danger-dark rounded-md font-semibold text-xs;
    }
    .btn-disabled {
        @apply text-secondary-light bg-secondary-lighter rounded-md font-semibold text-xs cursor-not-allowed pointer-events-none;
    }

    .form {
        @apply flex flex-col items-start space-y-1;
    }

    .label {
        @apply text-xs font-semibold;
    }
    .label.danger {
        @apply text-danger-darker;
    }

    .form-input-group {
        @apply w-full relative;
    }
    .form-input {
        @apply appearance-none focus:outline-none transition-fast text-xs font-light rounded-lg w-full border border-transparent;
    }
    .form-input.primary {
        @apply text-neutral-darkest placeholder-neutral-light bg-neutral-lightest focus:ring-4 focus:bg-white focus:ring-primary-lighter focus:border-primary-light;
    }
    .form-input.disabled {
        @apply text-secondary-light placeholder-secondary-lighter bg-secondary-lightest cursor-default pointer-events-none;
    }
    .form-input.error {
        @apply text-danger-darkest placeholder-danger-light bg-white border-danger-light focus:ring-4 focus:bg-white focus:ring-danger-lighter focus:border-danger-light;
    }

    .form-input-icon {
        @apply absolute inset-y-0 flex-center pointer-events-none
    }

    .link {
        @apply transition-default;
    }
    .link.primary {
        @apply hover:underline hover:text-primary-darker;
    }

    .nav {
        @apply btn px-4 py-2;
    }
    .nav-active {
        @apply btn-primary;
    }
    .nav-non-active {
        @apply text-secondary-light hover:text-black hover:bg-primary-lighter focus:ring-4 focus:ring-primary-lightest focus:bg-primary-lighter focus:text-black rounded-md font-semibold text-xs;
    }

    .table-default {
        @apply table w-full border-collapse;
    }
    .table-default > .th-tr-group {
        @apply hidden md:table-row-group;
    }
    .table-default > .th-tr-group > .tr {
        @apply table-row;
    }
    .table-default > .th-tr-group > .tr > .th {
        @apply table-cell font-bold p-4 border-b-2 border-neutral-lighter text-xs;
    }
    .table-default > .td-tr-group {
        @apply table-row-group divide-y divide-neutral-lightest;
    }
    .table-default > .td-tr-group > .tr {
        @apply grid gap-y-2 p-4 transition-default hover:bg-slate-50 md:table-row md:gap-y-0 md:p-0;
    }
    .table-default > .td-tr-group > .tr > .td {
        @apply text-xs md:table-cell md:p-4;
    }
    .table-default > .td-tr-group > .tr > .td-no {
        @apply text-xs md:table-cell md:p-4 w-12 hidden;
    }
    .table-default > .td-tr-group > .tr > .td-action {
        @apply text-xs md:table-cell md:p-4 md:w-20;
    }
}
    </style>