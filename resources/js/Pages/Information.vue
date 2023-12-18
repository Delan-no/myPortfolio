<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Contact from "@/Components/Contact.vue";
import { Head } from '@inertiajs/vue3';
defineProps(['contacts']);

</script>
 
<template>
    <Head title="Contact" />
 
    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">

            <div>
               <Contact
                    v-for="contact in contacts"
                     :key="contact.id" 
                     :contact="contact"
               />
            </div>
        </div>

    </AuthenticatedLayout>
</template>