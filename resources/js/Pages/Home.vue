
<template>
     <Head>
        <title>Inasja.com -Inasja Marroussia Wijdekop</title>
       <meta name="description" content="Mijn naam is Inasja Marroussia Wijdekop. De kern van mijn naam draagt een boodschap uit die nauw aansluit bij mijn levensvisie: 'Navigeer je leven met moed, maak authentieke keuzes en ontdek je unieke pad.'">
      </Head>
 <Layout>


   <div class="max-w-[580px] mx-auto p-4 mt-20">
      <img :src="imageSrc" alt="begin" class="  h-64  w-96 mx-auto rounded-lg">

        <br>
        <h1 class="text-center font-bold">Over Inasja Marroussia Wijdekop</h1>
         <hr class="m-auto border-1 border-accent-color w-72">
         <p class="text-left "> Mijn naam is Inasja Marroussia Wijdekop. De kern van mijn naam draagt een boodschap uit die nauw aansluit bij mijn levensvisie: "Navigeer je leven met moed, maak authentieke keuzes en ontdek je unieke pad."</p>
<br>
<h1 class="text-center font-bold">Mijn Verhaal</h1>
<hr class="m-auto border-1  border-accent-color w-28">
<p class="text-left">Mijn jeugd werd gekenmerkt door mijn opvoeding als Jehovah's Getuige, een gesloten religieuze gemeenschap met diepgewortelde overtuigingen. Het moment waarop ik op 22-jarige leeftijd werd buitengesloten, markeerde een keerpunt in mijn leven. Hierdoor verloor ik een vertrouwd netwerk en veranderde mijn relatie met mijn ouders drastisch. De daaropvolgende jaren waren een intense zoektocht naar mijn ware zelf. Nu, 8 jaar later, na deze transformatieve reis, ben ik vastbesloten om anderen te begeleiden bij het vinden van hun innerlijke kompas.</p>
<br>
<h1 class="text-center font-bold">Mijn Missie</h1>

    <hr class="m-auto border-1 border-accent-color w-24">
<p class="text-left">Het is mijn doel om een licht te zijn voor anderen op hun pad naar zelfontdekking. Ik wil een bron van inspiratie zijn, anderen ondersteunen in hun zoektocht naar hun eigen waarheid en ze aanmoedigen een leven te leiden waarin hun eigen geluk centraal staat</p>
<br>
    <h1 class="text-center font-bold">Hoe Ik Je Kan Helpen</h1>

    <hr class="m-auto border-1  border-accent-color w-44">
    <p class="text-left">Samen gaan we op reis. Ik zal er zijn om je stap voor stap te ondersteunen, om je te begeleiden bij elke uitdaging en overwinning, totdat je zelfverzekerd je eigen weg kunt bewandelen.</p><br>
       <h1 class="text-center font-bold">
    Geloof in Verandering</h1>

    <hr class="m-auto border-1  border-accent-color w-44">
    <p class="text-left">Is het mogelijk om een realiteit te creëren die je werkelijk gelukkig maakt? Absoluut. Ik ben het levende bewijs dat het kan. Door deze gezamenlijke reis beloof ik dat je meer rust, evenwicht en ontspanning in je leven zult vinden.</p>
<br><br><br>

<Link href="/contact" >
<button class="bg-primary-color w-full px-2 py-4  text-center rounded-lg m-auto">
   Contact

        </button>

</Link>
        </div>

        <br><br><br><br><br>


        </Layout>

</template>


<script>
import { Link } from '@inertiajs/vue3';
import Layout from '../Shared/Layout.vue'
import { Head } from '@inertiajs/vue3';




export default {
    components: {
    Layout,
    Link,

},
    data() {
        return {
            imageSrc: 'assets/images/logo.jpeg',
        }
    },

}

</script>


<style>


</style>
