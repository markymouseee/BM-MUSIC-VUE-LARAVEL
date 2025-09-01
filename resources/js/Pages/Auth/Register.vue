<script setup>
import { Link, Head } from '@inertiajs/vue3';
import Logo from '@/assets/images/BM-logo.png'
import InputField from '@/Components/InputField.vue';
import { ref } from 'vue';


const model = ref({
    fullname: '',
    username: '',
    email: '',
    password: '',
    password_confirmation: '',
});

</script>

<template>
    <div
        class="min-h-screen flex items-center justify-center p-6 bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700 dark:from-gray-900 dark:via-gray-800 dark:to-black relative overflow-hidden">

        <div
            class="absolute top-20 left-10 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse">
        </div>
        <div
            class="absolute bottom-20 right-10 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse">
        </div>

        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
        </div>

        <div
            class="w-full max-w-4xl grid grid-cols-1 z-10 md:grid-cols-2 bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden">
            <div
                class="px-8 py-10 bg-gradient-to-br from-blue-600 to-purple-600 text-white flex flex-col justify-between">
                <div>
                    <Link href="/">
                    <img :src="Logo" alt="BM Music" class="w-14 h-14 rounded-md shadow-sm bg-white/10" />
                    <h2 class="mt-6 text-3xl font-extrabold tracking-tight">BM Music</h2>
                    </Link>
                    <p class="mt-3 text-sm opacity-90 max-w-xs">
                        Sign up to access all the features of BM Music. Create your own playlists, discover new music,
                        and share your favorite songs with friends.
                    </p>
                </div>

                <div class="mt-6">
                    <ul class="text-sm space-y-2 opacity-95">
                        <li class="flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-7 h-7 bg-white/20 rounded-full">
                                <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#1ED760" fill-rule="evenodd"
                                        d="M19.0983701,10.6382791 C15.230178,8.34118115 8.85003755,8.12986439 5.15729493,9.25058527 C4.56433588,9.43062856 3.93727638,9.09580812 3.75758647,8.50284907 C3.57789655,7.90953664 3.91236362,7.28283051 4.50585273,7.10261054 C8.74455585,5.81598127 15.7909802,6.06440214 20.2440037,8.70780512 C20.7774195,9.02442687 20.9525156,9.71332656 20.6362472,10.2456822 C20.3198021,10.779098 19.6305491,10.9549008 19.0983701,10.6382791 M18.971686,14.0407262 C18.7004726,14.4810283 18.1246521,14.6190203 17.6848801,14.3486903 C14.4600027,12.3664473 9.54264764,11.792217 5.72728477,12.9503953 C5.23256328,13.0998719 4.70992535,12.8208843 4.55974204,12.3270462 C4.41061884,11.8323247 4.68978312,11.3107469 5.18362118,11.1602103 C9.5419409,9.83771368 14.9600247,10.4782013 18.6638986,12.7544503 C19.1036707,13.0253103 19.242016,13.6013075 18.971686,14.0407262 M17.5034233,17.308185 C17.2876894,17.6617342 16.827245,17.7725165 16.4749326,17.5571359 C13.6571403,15.8347984 10.1101639,15.4459119 5.93312425,16.4000177 C5.53063298,16.4922479 5.12937851,16.2399399 5.03767834,15.8376253 C4.94544812,15.4351341 5.19669597,15.0338796 5.60024736,14.9420027 C10.1712973,13.8970803 14.0923186,14.3467468 17.2551791,16.2796943 C17.6078449,16.4948982 17.7189805,16.9556959 17.5034233,17.308185 M12,0 C5.37267547,0 0,5.37249879 0,11.9998233 C0,18.6278546 5.37267547,24 12,24 C18.6275012,24 24,18.6278546 24,11.9998233 C24,5.37249879 18.6275012,0 12,0" />
                                </svg>
                            </span>
                            Built with Spotify API
                        </li>
                    </ul>
                </div>
            </div>

            <div class="p-8 sm:p-10">

                <Head title="Sign up - BM Music" />

                <div class="mb-6">
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                        Sign up to BM Music
                    </h3>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                        Join BM Music today and unlock a world of music at your fingertips. Create an account to
                        personalize your experience, build playlists, and connect with a vibrant community of music
                        lovers.
                    </p>
                </div>
                
                <form class="space-y-5">
                    <div>
                        <label for="fullname"
                            class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Full Name</label>
                        <InputField id="fullname" label="Fullname" type="text" placeholder="John Doe"
                            v-model="model.fullname" />
                    </div>
                </form>

            </div>
        </div>
    </div>
</template>