<template>
    <NavBar />
    <section>
        <slot />
    </section>

    <CookieBanner />
    <FooterBar />
</template>



<script>


import FooterBar from './FooterBar.vue';
import NavBar from './NavBar.vue';
import CookieBanner from './CookieBanner.vue';



export default {
    components: {
        NavBar,
        FooterBar,
        CookieBanner,
    },
};

</script>
