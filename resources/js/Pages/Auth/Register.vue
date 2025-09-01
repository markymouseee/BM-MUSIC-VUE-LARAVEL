<script setup>
import { Link, Head, router } from '@inertiajs/vue3';
import Logo from '@/assets/images/BM-logo.png';
import InputField from '@/Components/InputField.vue';
import { ref } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const model = ref({
    fullname: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const goToSignIn = () => router.visit('/sign-in');
</script>

<template>
    <div
        class="min-h-screen flex items-center justify-center p-6 bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700 dark:from-gray-900 dark:via-gray-800 dark:to-black relative overflow-hidden">

        <div class="absolute top-16 left-10 w-72 h-72 bg-purple-400 rounded-full blur-3xl opacity-15 animate-pulse" />
        <div class="absolute bottom-16 right-10 w-72 h-72 bg-blue-400 rounded-full blur-3xl opacity-15 animate-pulse" />
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5" />

        <div
            class="w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden animate-fade-in-up">
            <div
                class="px-10 py-12 bg-gradient-to-br from-blue-600 to-purple-600 text-white flex flex-col justify-between">
                <div>
                    <Link href="/">
                    <img :src="Logo" alt="BM Music" class="w-14 h-14 rounded-md shadow-md bg-white/10" />
                    <h2 class="mt-6 text-3xl font-extrabold tracking-tight">BM Music</h2>
                    </Link>
                    <p class="mt-4 text-sm opacity-90 leading-relaxed max-w-xs">
                        Join BM Music today and unlock a world of music at your fingertips. Create an account to
                        personalize your experience, build playlists, and connect with a vibrant community of music
                        lovers.
                    </p>
                </div>

                <ul class="mt-6 text-sm space-y-2 opacity-95">
                    <li class="flex items-center gap-3">
                        <span class="inline-flex items-center justify-center w-7 h-7 bg-white/20 rounded-full">
                            <svg width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#1ED760"
                                    d="M19.1,10.6C15.2,8.3,8.9,8.1,5.2,9.2C4.6,9.4,3.9,9.1,3.8,8.5C3.6,7.9,3.9,7.3,4.5,7.1C8.7,5.8,15.8,6.1,20.2,8.7C20.8,9,21,9.7,20.6,10.2C20.3,10.8,19.6,11,19.1,10.6 M19,14C18.7,14.5,18.1,14.6,17.7,14.3C14.5,12.4,9.5,11.8,5.7,13C5.2,13.1,4.7,12.8,4.6,12.3C4.4,11.8,4.7,11.3,5.2,11.2C9.5,9.8,15,10.5,18.7,12.8C19.1,13,19.2,13.6,19,14 M17.5,17.3C17.3,17.7,16.8,17.8,16.5,17.6C13.7,15.8,10.1,15.4,5.9,16.4C5.5,16.5,5.1,16.2,5,15.8C4.9,15.4,5.2,15,5.6,14.9C10.2,13.9,14.1,14.3,17.3,16.3C17.6,16.5,17.7,17,17.5,17.3 M12,0C5.4,0,0,5.4,0,12C0,18.6,5.4,24,12,24C18.6,24,24,18.6,24,12C24,5.4,18.6,0,12,0" />
                            </svg>
                        </span>
                        Built with Spotify API
                    </li>
                </ul>
            </div>

            <div class="p-8 sm:p-12">

                <Head title="Sign up - BM Music" />

                <div class="mb-8">
                    <h3
                        class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                        Get started with BM Music
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                        Sign up to access all the features of BM Music. Create playlists, discover new music,
                        and share your favorite songs with friends.
                    </p>
                </div>

                <form class="space-y-6">
                    <div>
                        <label for="fullname" class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">
                            Full Name
                        </label>
                        <InputField id="fullname" type="text" placeholder="John Doe" v-model="model.fullname" />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">
                            Email
                        </label>
                        <InputField id="email" type="email" placeholder="john.doe@example.com" v-model="model.email" />
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">
                            Password
                        </label>
                        <InputField id="password" type="password" placeholder="••••••••" v-model="model.password" />
                    </div>

                    <div>
                        <label for="confirm-password"
                            class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">
                            Confirm Password
                        </label>
                        <InputField id="confirm-password" type="password" placeholder="••••••••"
                            v-model="model.confirmPassword" />
                    </div>

                    <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">
                        By continuing, you agree to our
                        <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">terms and conditions</a>.
                    </p>

                    <PrimaryButton type="submit" class="w-full py-3 text-base font-semibold transition">
                        Sign up
                    </PrimaryButton>

                    <div class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
                        Already have an account?
                        <Link @click="goToSignIn" class="text-blue-600 hover:underline dark:text-blue-400">
                        Sign in
                        </Link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(40px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 0.9s ease-out forwards;
}
</style>
