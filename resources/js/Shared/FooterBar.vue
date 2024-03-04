<template>
    <div class="footer w-full bottom-0 mb-0  h-14 border-t-2 bg-primary-color border-accent-color ">
        <div class="flex flex-row justify-between m-10 mt-4 mb-4 ">
<FaceBook class="mb-2"/>
<div class="flex flex-col">
            <p class="text-center text-xs">Inasja.com@2024</p>
            <p class="text-center text-xs">👈----volgen----👉</p>

          </div>
<Insta class="mb-2" />
        </div>

    </div>
</template>


<script>
import FaceBook from '../Shared/FaceBook.vue'
import Insta from '../Shared/Insta.vue'


export default {
    components: {
        FaceBook,
        Insta,
    }
}

</script>


<style>
.footer {
position: fixed;
    bottom: 0;

}
</style>
