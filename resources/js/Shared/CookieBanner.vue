<template>
    <div v-if="!isCookieAccepted"
        class="fixed inset-x-0 bottom-0 flex-col max-w-[580px] mb-40 mx-auto bg-white  py-6 px-6 flex justify-between items-center shadow-md  border-2 m-2  border-secondary-color rounded-md ">
        <div class="m-auto flex flex-row ">
            <p class="mt-1">cookie</p><svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" viewBox="0 0 24 24" >
                <path fill="brown"
                    d="M12 21.5q-1.971 0-3.705-.748t-3.016-2.03q-1.283-1.283-2.03-3.017Q2.5 13.971 2.5 12q0-1.933.744-3.656t2.025-3.03q1.281-1.306 3-2.073q1.72-.766 3.664-.766q.382 0 .782.03q.4.032.802.099q-.07 1.125.275 2.038q.346.914 1.02 1.557q.673.643 1.633.96q.96.318 2.138.27q-.304 1.475.62 2.652q.924 1.177 2.285 1.361l.01.119q.002.054.002.118q0 2.017-.752 3.8t-2.041 3.125q-1.29 1.34-3.017 2.118q-1.727.778-3.69.778M10.51 9.808q.538 0 .918-.39t.38-.928q0-.538-.382-.918q-.381-.38-.926-.38q-.529 0-.918.382q-.39.381-.39.926q0 .529.39.918q.39.39.928.39m-2 5q.538 0 .918-.39t.38-.928q0-.538-.382-.918q-.381-.38-.926-.38q-.529 0-.918.382q-.39.381-.39.926q0 .529.39.918q.39.39.928.39m6.5 1q.338 0 .568-.24q.23-.24.23-.578q0-.338-.233-.568q-.232-.23-.575-.23q-.329 0-.568.233q-.24.232-.24.575q0 .329.24.568q.24.24.578.24M12.004 20.5q3.23 0 5.73-2.34q2.503-2.34 2.747-5.937q-1.327-.53-2.068-1.5q-.742-.97-.876-2.336q-2.06-.18-3.445-1.477q-1.384-1.298-1.517-3.416q-1.904-.127-3.56.533q-1.657.66-2.881 1.853q-1.224 1.193-1.93 2.79Q3.5 10.27 3.5 12q0 3.517 2.491 6.009t6.013 2.491M12 11.804" />
            </svg>
        </div>
        <div class="text-left">
        <p>Deze website maakt gebruik van cookies om uw surfervaring te verbeteren.</p>
        <p>Door te accepteren, wordt dit bericht 60 dagen lang niet meer weergegeven.</p>
        <p>Als u weigert, zal dit bericht bij elk bezoek opnieuw verschijnen.</p>
        </div>
        <br>
        <div>
            <button @click="acceptCookie"
                class="bg-green-400 py-2 px-4 rounded mr-2 text-sm m-4 hover:bg-accent-color border-2 border-black">Accepteer</button>

            <button @click="rejectCookie"
                class="bg-red-400  py-2 px-4 rounded text-sm m-4  hover:bg-secondary-color border-2 border-black">Weigeren
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "CookieBanner",
    data() {
        return {
            isCookieAccepted: false
        };
    },
    created() {
        this.checkCookie();
    },
    methods: {
        acceptCookie() {
            localStorage.setItem("cookieAccepted", "true");
            localStorage.setItem("cookieAcceptedDate", new Date().toISOString());
            this.isCookieAccepted = true;
        },
        rejectCookie() {
            localStorage.setItem("cookieAccepted", "false");
            this.isCookieAccepted = true;
        },
        checkCookie() {
            const cookieAccepted = localStorage.getItem("cookieAccepted");
            const cookieAcceptedDate = new Date(localStorage.getItem("cookieAcceptedDate"));
            const currentDate = new Date();
            const diffTime = Math.abs(currentDate - cookieAcceptedDate);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            if (cookieAccepted === "true" && diffDays <= 60) {
                this.isCookieAccepted = true;
            }
        }
    }
};
</script>

