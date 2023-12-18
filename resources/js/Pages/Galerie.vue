<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
defineProps(['galeries']);
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head } from '@inertiajs/vue3';
const form = useForm({
    name: '',
    images: '',
    description: '',  
});
</script>



<template>
    <AuthenticatedLayout>
        <p>Bienvenue sur galerie </p>

        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <form @submit.prevent="form.post(route('galerie.store'), { onSuccess: () => form.reset() })">
                
                <label>Name</label>
                <input v-model="form.name" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Nom et Prénom">
                <!-- {{ form.name }} -->
                <label>image</label>
                <input type="file" @input="form.images = $event.target.files[0]" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"  placeholder="+229 67 51 41 01">
                <!-- {{ form.images }} -->
                <textarea
                    v-model="form.description"
                    placeholder="Description"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                ></textarea>
                <!-- {{ form.description }} -->

                <InputError :message="form.errors.message" class="mt-2" />

                <button type="submit" class="mt-4">Envoyer</button>
            </form>
        </div>
        

        <!-- <div class="border-t mt-4 m" v-for="galerie in galeries" :key="galerie.id" :galerie="galerie">
          
                <p>{{ galerie.name }}</p>
                 <button>{{ galerie.images }}</button>
                <p>{{ galerie.description }}</p>
            
        </div> -->
    </AuthenticatedLayout>    
</template>