<nav class="flex flex-col px-4 bg-zinc-900 dark:bg-zinc-200 md:flex-row" x-data="{ open: false }">
    <div class="flex flex-row flex-1">
        <img src="images/barbageCode.svg" alt="logo" class="w-20">

        <button class="block my-auto ml-auto md:hidden" x-on:click="open=!open">
            <span x-show="open">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd" />
                </svg>
            </span>

            <span x-show="!open">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>
    </div>

    <div class="flex-1" x-show="open || matchMedia('(min-width: 768px) and (max-width: 1536px)').matches" x-transition>
        <div class="flex flex-col justify-end md:flex-row">
            <x-a-navbar href="/" text="Inicio" />
            <x-a-navbar href="/" text="Precios" />
            <x-a-navbar href="/" text="Blog" />
            <x-a-navbar href="/" text="Contacto" />
        </div>
    </div>
</nav>

<script>
    window.addEventListener('resize', () => {
        if (matchMedia('(min-width: 768px) and (max-width: 1536px)').matches) {
            open = true;
        }

        open = false;
    });
</script>
