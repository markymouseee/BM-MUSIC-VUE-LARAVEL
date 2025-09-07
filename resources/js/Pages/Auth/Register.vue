<script setup lang="ts">
import { Link, Head, Form } from '@inertiajs/vue3';
import Logo from '@/assets/images/BM-logo.png';
import { InputField } from '@/Components/inputs';
import { PrimaryButton } from '@/Components/buttons';
import { route } from 'ziggy-js';


const form = ({
    fullname: '',
    email: '',
    password: '',
    password_confirmation: ''
})

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
                    <a href="https://github.com/markymouseee/BM-MUSIC-VUE-LARAVEL" target="_blank"
                        class="hover:underline">
                        <li class="flex items-center gap-3 mb-2">
                            <span class="inline-flex items-center justify-center w-7 h-7 bg-white/20 rounded-full">

                                <svg width="20" height="20" viewBox="0 0 20 20" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                    <title>github [#142]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs>
                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"
                                            fill="currentColor">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                                    id="github-[#142]">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            Github Repository
                        </li>
                    </a>

                    <a href="https://github.com/markymouseee" target="_blank" class="hover:underline">
                        <li class="flex items-center gap-3 mb-2">
                            <span class="inline-flex items-center justify-center w-7 h-7 bg-white/20 rounded-full">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                        fill="currentColor" />
                                    <path
                                        d="M13.4881 6.44591C13.8882 6.55311 14.1256 6.96437 14.0184 7.36447L11.4302 17.0237C11.323 17.4238 10.9117 17.6613 10.5116 17.5541C10.1115 17.4468 9.8741 17.0356 9.98131 16.6355L12.5695 6.97624C12.6767 6.57614 13.088 6.3387 13.4881 6.44591Z"
                                        fill="currentColor" />
                                    <path
                                        d="M14.9697 8.46967C15.2626 8.17678 15.7374 8.17678 16.0303 8.46967L16.2387 8.67801C16.874 9.3133 17.4038 9.84308 17.7678 10.3202C18.1521 10.8238 18.4216 11.3559 18.4216 12C18.4216 12.6441 18.1521 13.1762 17.7678 13.6798C17.4038 14.1569 16.874 14.6867 16.2387 15.322L16.0303 15.5303C15.7374 15.8232 15.2626 15.8232 14.9697 15.5303C14.6768 15.2374 14.6768 14.7626 14.9697 14.4697L15.1412 14.2981C15.8229 13.6164 16.2797 13.1574 16.5753 12.7699C16.8577 12.3998 16.9216 12.1843 16.9216 12C16.9216 11.8157 16.8577 11.6002 16.5753 11.2301C16.2797 10.8426 15.8229 10.3836 15.1412 9.70191L14.9697 9.53033C14.6768 9.23744 14.6768 8.76257 14.9697 8.46967Z"
                                        fill="currentColor" />
                                    <path
                                        d="M7.96986 8.46967C8.26275 8.17678 8.73762 8.17678 9.03052 8.46967C9.32341 8.76257 9.32341 9.23744 9.03052 9.53033L8.85894 9.70191C8.17729 10.3836 7.72052 10.8426 7.42488 11.2301C7.14245 11.6002 7.07861 11.8157 7.07861 12C7.07861 12.1843 7.14245 12.3998 7.42488 12.7699C7.72052 13.1574 8.17729 13.6164 8.85894 14.2981L9.03052 14.4697C9.32341 14.7626 9.32341 15.2374 9.03052 15.5303C8.73762 15.8232 8.26275 15.8232 7.96986 15.5303L7.76151 15.322C7.12617 14.6867 6.59638 14.1569 6.23235 13.6798C5.84811 13.1762 5.57861 12.6441 5.57861 12C5.57861 11.3559 5.84811 10.8238 6.23235 10.3202C6.59638 9.84308 7.12617 9.31331 7.76151 8.67801L7.96986 8.46967Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            Developed by: Mark
                        </li>
                    </a>

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

                <Form :action="route('user.register.store')" method="post" v-slot="{ errors, processing }"
                    :reset-on-success="['password']" class="space-y-6">

                    <InputField type="text" name="fullname" id="fullname" label="Name" placeholder="John Doe"
                        v-model="form.fullname" :error-message="errors.fullname" :error="!!errors.fullname"
                        @clear-error="errors.fullname = ''" />

                    <InputField type="email" name="email" id="email" label="Email addresss"
                        placeholder="john@example.com" v-model="form.email" :error="!!errors.email"
                        :error-message="errors.email" @clear-error="errors.email = ''" />

                    <InputField type="password" name="password" id="password" label="Password" placeholder="•••••••••"
                        v-model="form.password" :error="!!errors.password" :error-message="errors.password"
                        @clear-error="errors.password = ''" />

                    <InputField type="password" name="password_confirmation" id="password_confirmation" placeholder="•••••••••" label="Confirm Password"
                        v-model="form.password_confirmation" :error="!!errors.password_confirmation" :error-message="errors.password_confirmation"
                        @clear-error="errors.password_confirmation = ''"/>

                    <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">
                        By continuing, you agree to our
                        <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">Terms of Service</a> and <a
                            href="#" class="text-blue-600 dark:text-blue-400 hover:underline">Privacy Policy</a>.
                    </p>

                    <PrimaryButton type="submit">
                        Sign up
                    </PrimaryButton>

                    <div class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
                        Already have an account?
                        <Link :href="route('user.login')" class="text-blue-600 hover:underline dark:text-blue-400">
                        Sign in
                        </Link>
                    </div>
                </Form>
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
