<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import Contact from "@/Components/Contact.vue";
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head } from '@inertiajs/vue3';
defineProps(['contacts']);
const form = useForm({
    name: '',
    numero: '',
    message: '',  
});
</script>
 
<template>
    <Head title="Contact" />
 
    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <form @submit.prevent="form.post(route('contact.store'), { onSuccess: () => form.reset() })">
                
                <label>Nom & Prénom</label>
                <input v-model="form.name" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Nom et Prénom">
                
                <label>Numéro</label>
                <input type="tel" v-model="form.numero" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"  placeholder="+229 67 51 41 01">
                
                <textarea
                    v-model="form.message"
                    placeholder="A quoi pensez vous ?"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                ></textarea>

                <InputError :message="form.errors.message" class="mt-2" />

                <PrimaryButton class="mt-4">Envoyer</PrimaryButton>
            </form>
        </div>
    </AuthenticatedLayout>
</template>