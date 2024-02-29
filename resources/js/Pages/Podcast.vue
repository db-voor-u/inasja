<template>
     <Head>
        <title>Inasja.com -Poscast</title>
   <meta name="description" content="Ontdek 'Leef Je Leven Zonder Angst' met Inasja Marroussia Wijdekop op Spotify. Luister naar inspirerende gesprekken over moed, persoonlijke ontwikkeling en het overwinnen van angsten. Laat je inspireren om met vertrouwen je eigen weg te gaan.">


    </Head>
    <Layout>
     <div class="max-w-[580px] mx-auto p-4 mt-20 ">
        <div class=" object-cover">
                <img :src="imgSrc" alt="podcast" class="h-64  w-96 mx-auto rounded-lg  ">
            </div>
            <h1 class="text-center font-bold text-2xl">Podcast</h1>
            <div class="mt-10 text-left">
              <h1 class="font-bold">Welkom op de podcastpagina van "Live Your Life Fearlessly" met Inasja Marroussia Wijdekop, beschikbaar via Spotify</h1>
            <br>
            <h3>Duik diep in de kunst van moedig leven met de inspirerende podcastserie "Live Your Life Fearlessly", gehost door Inasja Marroussia Wijdekop. Deze serie nodigt luisteraars uit op een reis van zelfontdekking, persoonlijke groei, en het omarmen van een onbevreesde levenshouding.</h3>
            <br>
            <h3>In elke aflevering verkent Inasja de verschillende facetten van moedig leven, van diepgaande gesprekken met gasten uit uiteenlopende disciplines tot het delen van persoonlijke ervaringen en overwinningen op angst. "Live Your Life Fearlessly" staat vol met authentieke verhalen, praktische adviezen, en inzichten die luisteraars aanmoedigen om voorbij hun angsten te kijken en een leven vol vreugde en mogelijkheden na te streven.</h3>
          <br>
          <h3>Als gids op deze ontdekkingsreis, biedt Inasja Marroussia Wijdekop niet alleen een luisterend oor maar deelt zij ook de wijsheid en strategieën die haar hebben geholpen een leven van vrijheid en authenticiteit te leiden. Haar warmte en empathie maken elke aflevering niet alleen leerzaam maar ook diep ontroerend.</h3>
          <br>
          <h1 class="font-bold">Waarom "Live Your Life Fearlessly" beluisteren?</h1>
          <br>
          <ul>
            <li><h3><strong>Inspirerende verhalen:</strong> Laat je meeslepen door de ervaringen van mensen die de kracht hebben gevonden om hun angsten te overwinnen.</h3></li>
            <li><h3><strong>Praktische tips:</strong> Ontdek benaderingen en technieken om angst in je eigen leven het hoofd te bieden.</h3></li>
            <li><h3><strong>Diepgaande gesprekken:</strong> Geniet van gesprekken die zowel de geest verlichten als het hart raken.</h3></li>
            <li><h3><strong>Ontdek je potentieel:</strong> Leer hoe je een leven zonder grenzen kunt leiden, vol mogelijkheden en blijdschap.</h3></li>
          </ul>
          <br>
          <h3>"Live Your Life Fearlessly" is nu beschikbaar op Spotify en nodigt jou uit om de eerste stap te zetten op weg naar een dapper en onbevreesd bestaan. Of je nu op zoek bent naar inspiratie, praktisch advies, of gewoon wilt genieten van ontroerende verhalen, deze podcast heeft iets te bieden voor iedereen die verlangt naar persoonlijke groei en transformatie.</h3>
<br>
<h3 class="font-bold">Luister nu en laat Inasja Marroussia Wijdekop je begeleiden op jouw reis naar een leven zonder angst. Jouw avontuur naar moed begint hier.</h3>
          </div>
        </div>
     <div class="spotify-container mt-10 p-4 max-w-[580px] mx-auto">
        <div class="flex flex-col gap-4">
          <iframe v-for="(link, index) in spotifyLinks" :key="index" class="spotify-iframe" :src="link"  frameborder="0" allowtransparency="true" allow="encrypted-media" ></iframe>
        </div>
      </div>
     <br><br>
     <div class="max-w-[580px] mx-auto p-4">
      <h1 class="text-left font-bold">Wil je "Live Your Life Fearlessly" via Spotify beluisteren? Klik dan op het icoon hieronder om direct naar onze Spotify-pagina te gaan en duik in de wereld van moedig leven met Inasja Marroussia Wijdekop.</h1>
</div>
      <br>
      <Spotify/>


     </Layout>
     <br><br><br><br><br>
</template>


<script>
import Layout from '../Shared/Layout.vue';
import Spotify from '../Shared/Spotify.vue';
import { Head } from '@inertiajs/vue3';

export default {
    components: {
    Spotify,
    Layout
},
    data() {
        return {
          imgSrc: '/images/podcastimg.webp',
            // Bovenste is het eerste
            spotifyLinks:
                [
                    "https://open.spotify.com/embed/episode/4zwCLWyjU9mnn4sdIDSNCj?utm_source=generator",
                    "https://open.spotify.com/embed/episode/2ds5bmQvAzSSCFoLq6n3lM?utm_source=generator",
                    "https://open.spotify.com/embed/episode/7sklMgOTYeiLc8WFJtntm4?utm_source=generator",
                    "https://open.spotify.com/embed/episode/0mKVt8wiaRpgI1PS6kAtET?utm_source=generator",
                    "https://open.spotify.com/embed/episode/1SY94IUlAfETvFVv7RRanK?utm_source=generator",
                    "https://open.spotify.com/embed/episode/43nhNzRJFy7wjNOwEA2G2k?utm_source=generator" ,
                    "https://open.spotify.com/embed/episode/3S9WIYRCwK0K4nqe0lvbIZ?utm_source=generator",
                    "https://open.spotify.com/embed/episode/7qxBIHUE30GHwtkBGhv0Xy?utm_source=generator",
                    "https://open.spotify.com/embed/episode/5G6Nxb1h1dCBe5oT56dJhL?utm_source=generator",
                    "https://open.spotify.com/embed/episode/2fCHyxT0Infeqqxcx4cbb4?utm_source=generator" ,
                    "https://open.spotify.com/embed/episode/5yaXhfvjlenwgW2S74qPOd?utm_source=generator",
                    "https://open.spotify.com/embed/episode/5yMj60O8BkSkyJCihGq4Lp?utm_source=generator" ,
                    "https://open.spotify.com/embed/episode/77mtYB6gN3A6Wf381QXfaY?utm_source=generator",
                    "https://open.spotify.com/embed/episode/7acRYfFIDYgNUTs9PNN5fw?utm_source=generator",

                ]
        }
    },
}

</script>


<style>
.spotify-iframe {
  width: 100%;
  height:100px; /* Pas aan op basis van je behoeften */
  border-radius: 0.5rem; /* Spotify-stijl */
}
</style>
