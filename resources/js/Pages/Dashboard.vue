<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template class="container">
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template> -->

        <div class="">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <p class="text-center">BIENVENU SUR MON PORTFOLIO</p>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-wrap justify-center gap-8 pt-10">
                        <!-- <div class="p-6 text-gray-900 dark:text-gray-100">You're logged in!</div> -->


                            <div>

                                <div class="rounded-full w-60 h-60 border-4 bg-gray-500">
                                    <!-- <img class="rounded-full w-40 h-40 border-4" src="../../../assets/images/fond.png"> -->

                                </div>

                            </div>

                            <div class="pl-4 pr-4 text-xl">
                                <h1 class="text-3xl pt-2">Salut</h1>
                                <h1 class="text-2xl pt-2">Je suis <strong class="text-4xl text-purple-600 font-bold">Délanno Kotcho</strong></h1>
                                <h1 class="text-2xl pt-2 text-fuchsia-600">Développeur full-stack</h1>
                                <p class=" pt-2">Avec une confiance inébranlable et une expérience solide,</p>
                                <p class=" pt-2"> je suis prêt à contribuer à
                                    votre merveilleux projet. Faites-moi 
                                     confiance, </p>
                                <p class=" pt-2"> avec mon expertise, vous ne serez pas
                                    déçu.</p>
                            </div>


                       

                    </div>
                </div>
            </div>
        </div>



    </AuthenticatedLayout>
</template>
