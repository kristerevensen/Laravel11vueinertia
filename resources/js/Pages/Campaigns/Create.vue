<template>
    <Head title="Create Campaign" />
    <FrontendLayout>
        <div class="mt-4 mx-4">
            <div class="flex justify-between">
                <h5>Create Campaign</h5>
                <Link :href="route('campaigns.index')" class="bg-red-600 text-white py-2 px-5 rounded mb-4 inline-block">Back</Link>
            </div>

            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-6">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" v-model="form.name" name="name" id="name" autocomplete="name" class="py-1 w-full focus" />
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" v-model="form.description" name="name" id="name" autocomplete="name" class="py-1 w-full focus" />
                    </div>
                    <div class="mb-3">
                       <Link :href="route('campaigns.index')" class="bg-red-600 text-white py-2 px-5 rounded mb-4 inline-block mr-5">
                        Back
                        </Link>
                        <button
                            type="submit"
                            class="bg-blue-500 text-white py-2 px-5 rounded mb-4"
                            @click="submitForm"
                        >
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    description: '',
});
</script>
