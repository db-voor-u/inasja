<template>
     <Layout>
      <Head >
        <title>Inasja.com -Contact</title>
     <meta name="description" content="Neem contact op met 'Live Your Life Fearlessly' - Wij horen graag van je!" >

      </Head>

    <div class="max-w-[580px] mx-auto p-2 mt-20">

    <img src="/public/assets/images/contactimg.webp" alt="contactimg" class=" object-obtain  h-60 w-96 mx-auto border-2 border-accent-color rounded-xl ">
        <h1 class="text-2xl font-bold mb-4 text-center">Contact</h1>
    </div>
    <div class="max-w-[580px] mx-auto p-2 mb-4">
        <form @submit.prevent="sendEmail">

            <!-- Voornaam -->
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="voornaam">Voornaam en Achternaam</label>
                <input type="text" v-model="name"   aria-label="Jouw naam" class="shadow appearance-none border rounded w-full py-2 px-3" required>
            </div>



            <!-- E-mail -->
    <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="email">E-mailadres</label>
                <input type="email" v-model="email" aria-label="E-mailadres" class="shadow appearance-none border rounded w-full py-2 px-3" required>
            </div>

            <!-- Vraag / Bericht -->
    <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="bericht">Uw Vraag of Bericht</label>
                <textarea v-model="message" aria-label="Uw Vraag of Bericht" class="shadow appearance-none border rounded w-full py-2 px-3 h-32" required></textarea>
            </div>

            <!-- Verzendknop -->
    <div class="mb-4">
                <button @click="sendEmail"  class="bg-primary-color hover:bg-secondary-color font-bold py-2 px-4 rounded">
                    Verstuur
                </button>
            </div>

        </form>
 <div v-if="isLoading" class="spinner"></div>
        <!-- <div v-if="messageSent">Uw bericht is goed verzonden. U wordt automatisch naar de beginpagina geleid.</div> -->
    </div>
    <div class="max-w-[580px] mx-auto p-2">
        <p class="text-left">Bedankt voor uw bericht.<br><br> Live Your Life Fearlessly streeft ernaar om binnen twee weken contact met u op te nemen. Wij waarderen uw geduld en interesse.<br><br> Met vriendelijke groet,<br><br></p>
          <a href="/" class="team-inasja">Inasja Marroussia Wijdekop</a>




    </div>
<br><br><br>
<p class="text-center text-xs
mb-2 ">KVK 86962752</p>
<br><br>
    </Layout>

</template>


<script>
import Layout from '../Shared/Layout.vue'
import { Head } from '@inertiajs/vue3';

export default {
    components: {
       Layout
    },

    data() {
        return {
            isLoading: false,
            messageSent: false,


        };
    },
    methods: {
        async sendEmail() {
            this.isLoading = true;
            this.messageSent = false;

            try {
                await this.$inertia.post('/send-email', {
                    name: this.name,
                    email: this.email,
                    userMessage: this.message
                });
                this.name = '';
                this.email = '';
                this.message = '';
                // Show confirmation message
                alert('Email sent successfully! Druk op ok dan word u automatisch naar de begin pagina geleid.');
                this.$inertia.visit('/');



            } catch (error) {
                // Hier kunt u een foutbericht weergeven of loggen
                console.error("Fout bij het verzenden van de e-mail:", error);
            } finally {
                this.isLoading = false;
            }
        },

        // Andere methoden kunnen hier worden toegevoegd
    },
};
</script>
