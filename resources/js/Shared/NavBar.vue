<template>
    <header
        class="w-full fixed  top-0   bg-primary-color h-20  flex flex-row justify-between border-b-2  border-accent-color">
        <Link href="/" class="flex flex-col">
        <h1 class="ml-6 mt-4 font-bold text-xl flex flex-row">Inasja<p class=" text-accent-color">.</p>com</h1>
        <p class="text-sm ml-[27px] font-bold flex flex-row">Spreker<p class=" text-accent-color">|</p>Empowerment coach</p>
        </Link>
        <nav>

            <button @click="toggleMenu" class="  text-black  justify-end mr-8 mt-4">
                <svg v-if="menuOpen" class="ml-2 " xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                    viewBox="0 0 256 256">
                    <path fill="black"
                        d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z" />
                </svg>
                <svg v-else xmlns="http://www.w3.org/2000/svg" class="ml-1" width="34" height="34"  viewBox="0 0 24 24"><path fill="currentColor" d="M3 18h18v-2H3zm0-5h18v-2H3zm0-7v2h18V6z"/></svg>
                <p v-if="menuOpen" class="text-sm  font-bold mr-2 ">sluiten</p>
                <p v-else class="text-sm  font-bold mr-1">menu</p>

            </button>

            <div v-if="menuOpen" class="fixed inset-0 flex items-center justify-center ">
                <div @click="closeMenu" class="absolute inset-0 bg-black opacity-50  cursor-pointer">
                    <br>

                </div>

                <div
                    class="achtergrond relative  w-96 bg-gradient-to-r from-green-100 via-teal-200 to-pink-100 border-2  border-accent-color rounded-lg shadow-lg justify-center items-center text-center ">
                         <!-- <img :src="imgSrc" alt="" class=" h-32 w-full "> -->


                    <h1 class="text-left ml-14 text-2xl font-bold mt-10">Ga naar</h1>
                    <hr class="w-28 ml-14 border-b-2 border-accent-color">



                    <Link href="/" @click="closeMenu" class="ml-14 mt-20 text-lg flex flex-row "
                      :class="{ 'font-bold  border-b-2 border-accent-color  w-14 ': $page.component === 'Home' }"
                     >Begin</Link>
                    <br>
                    <br>
                    <Link href="/wiebenik" @click="closeMenu" class="ml-14 text-lg flex flex-row "
                        :class="{ 'font-bold  border-b-2 border-accent-color  w-16': $page.component === 'WieBenIk' }">Inasja</Link>
                    <br>
                    <br>
                    <Link href="/coaching" @click="closeMenu" class="ml-14 text-lg flex flex-row "
                       :class="{ 'font-bold  border-b-2 border-accent-color  w-24 ': $page.component === 'Coaching' }">Coaching</Link>
                    <br>
                    <br>
                    <Link href="/aanbod" @click="closeMenu" class="ml-14 text-lg flex flex-row "
                       :class="{ 'font-bold  border-b-2 border-accent-color  w-20': $page.component === 'Aanbod' }">Aanbod</Link>
                    <br>
                    <br>
                    <Link href="/podcast" @click="closeMenu" class="ml-14 text-lg flex flex-row "
                      :class="{ 'font-bold  border-b-2 border-accent-color  w-20': $page.component === 'Podcast' }">Podcast</Link>
                    <br>
                    <br>
                  <Link href="/werkzaamheden" @click="closeMenu" class="ml-14 text-lg flex flex-row "
                           :class="{ 'font-bold  border-b-2 border-accent-color  w-40': $page.component === 'WerkZaamHeden' }">Werkzaamheden</Link>
                            <br>
                            <br>
                            <Link href="/contact" @click="closeMenu" class="ml-14 text-lg flex flex-row "
                                :class="{ 'font-bold  border-b-2 border-accent-color  w-20': $page.component === 'Contact' }">Contact</Link>
                                   <br>
                                <br>

                </div>
            </div>

        </nav>
    </header>
</template>




<script>
import { Link } from '@inertiajs/vue3';

export default {
    components: { Link},
    data() {
        return {
            menuOpen: false,

        };
    },


    methods: {
        toggleMenu() {
            this.menuOpen = !this.menuOpen;
        },
        closeMenu() {
            this.menuOpen = false;
        },


    },

};

</script>


<style>


</style>
