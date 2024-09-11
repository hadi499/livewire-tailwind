<div>
  <nav id="sidebar"
    x-data="{ isOpen: true }"
    :class="{ 'w-16': !isOpen, 'w-52': isOpen }"
    class="h-screen flex flex-col items-start pl-3 gap-4 bg-slate-200 border-r  ticky top-0"
    :class="{
        'justify-center items-center ': !isOpen, 
        'pl-3 items-start': isOpen 
    }">

    <div class="flex items-center  w-full p-2">

      <span
        x-show=" isOpen"
        :class="{
        'hidden': !isOpen, 
        'block': isOpen 
    }">
        coding-dev
      </span>

      <button
        @click=" isOpen=!isOpen"
        id="toggle-btn"
        :class="{ 'rotate-180': !isOpen }"
        class="ml-auto p-1 bg-none border-none rounded-full cursor-pointer transition-transform duration-100 ease bg-blue-300 ">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="" class="transition-transform duration-100 ease-in-out">
          <path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z" />
        </svg>
      </button>
    </div>

    <!-- Home Link -->
    <div class="flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="" @click="if (!isOpen) isOpen = true">
        <path d="M240-200h120v-200q0-17 11.5-28.5T400-440h160q17 0 28.5 11.5T600-400v200h120v-360L480-740 240-560v360Zm-80 0v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H560q-17 0-28.5-11.5T520-160v-200h-80v200q0 17-11.5 28.5T400-120H240q-33 0-56.5-23.5T160-200Zm320-270Z" />
      </svg>
      <span x-show=" isOpen"
        :class="{
        'hidden': !isOpen, 
        'block': isOpen 
    }">Home</span>
    </div>

    <!-- Posts Link with Dropdown -->
    <div
      x-data="{
        open: false,
        toggle() {
            if (this.open) {
                return this.close()
            }

            this.$refs.button.focus()

            this.open = true
        },
        close(focusAfter) {
            if (! this.open) return

            this.open = false

            focusAfter && focusAfter.focus()
        }
      }"
      x-on:keydown.escape.prevent.stop="close($refs.button)"
      x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
      x-id="['dropdown-button']"
      class="relative">
      <div class="flex items-center space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="" @click="if (!isOpen) isOpen = true">
          <path d="M520-640v-160q0-17 11.5-28.5T560-840h240q17 0 28.5 11.5T840-800v160q0 17-11.5 28.5T800-600H560q-17 0-28.5-11.5T520-640ZM120-480v-320q0-17 11.5-28.5T160-840h240q17 0 28.5 11.5T440-800v320q0 17-11.5 28.5T400-440H160q-17 0-28.5-11.5T120-480Zm400 320v-320q0-17 11.5-28.5T560-520h240q17 0 28.5 11.5T840-480v320q0 17-11.5 28.5T800-120H560q-17 0-28.5-11.5T520-160Zm-400 0v-160q0-17 11.5-28.5T160-360h240q17 0 28.5 11.5T440-320v160q0 17-11.5 28.5T400-120H160q-17 0-28.5-11.5T120-160Zm80-360h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z" />
        </svg>
        <span x-show=" isOpen"
          :class="{
        'hidden': !isOpen, 
        'block': isOpen 
    }">Posts</span>

        <!-- Button for dropdown -->
        <button
          x-show=" isOpen"
          :class="{
        'hidden': !isOpen, 
        'block': isOpen 
    }"
          x-ref="button"
          x-on:click="toggle()"
          :aria-expanded="open"
          :aria-controls="$id('dropdown-button')"
          type="button"
          class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down" :class="{'rotate-180': open, 'rotate-0': !open}" style="transition: transform 0.3s ease;">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 9l6 6l6 -6" />
          </svg>
        </button>
      </div>

      <!-- Panel for dropdown items -->
      <div
        x-ref="panel"
        x-show="open"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-y-0"
        x-transition:enter-end="transform opacity-100 scale-y-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="transform opacity-100 scale-y-100"
        x-transition:leave-end="transform opacity-0 scale-y-0"
        x-on:click.outside="close($refs.button)"
        :id="$id('dropdown-button')"
        style="display: none;"
        class="origin-top">
        <ul class="pl-6 space-y-3 mt-4">
          <li>aa</li>
          <li>aa</li>
          <li>aa</li>
          <li>aa</li>
        </ul>
      </div>
    </div>

  </nav>
</div>