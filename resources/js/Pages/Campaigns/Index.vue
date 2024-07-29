<template>
    <Head title="Campaigns" />
    <FrontendLayout>
        <div class="mt-4 mx-4">
            <div class="flex justify-between">
                <h5>Campaigns</h5>
                <Link :href="route('campaigns.create')" class="bg-blue-500 text-white p-3 rounded mb-4">Add Campaign</Link>
            </div>
            <table class="w-full bg-white border border-gray-200 shadow rounded">
                <thead>
                    <tr>
                        <th class="py-2 px-4 text-left border">Campaign</th>
                        <th  lass="py-2 px-4 text-left border">Start Date</th>
                        <th class="py-2 px-4 text-left border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border">1</td>
                        <td class="py-2 px-4 border">2</td>
                        <td class="py-2 px-4 border">
                            <Link
                                :href="route('campaigns.create')"
                                class="px-2 oy-1 text-sm bg-blue-300 text-dark me-2 rounded mb-4 inline-block"
                            >Show
                            </Link>
                            <Link
                                :href="route('campaigns.create')"
                                class="px-2 oy-1 text-sm bg-green-300 text-white me-2 rounded mb-4 inline-block"
                            >Edit
                            </Link>
                            <Link
                                :href="route('campaigns.create')"
                                class="px-2 oy-1 text-sm bg-danger-500 text-white me-2 rounded mb-4 inline-block"
                            >Delete
                            </Link>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>
